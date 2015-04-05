<?php

class missing_model extends Model {

    private function execute($sql, $datatype = null, $data = array()) {
        $stmt = $this->DB->prepare($sql);
        if (!$stmt) {
            return false;
        }
        if (!empty($datatype) && !empty($data)) {
            if (!call_user_func_array(array($stmt, "bind_param"), array_merge([$datatype], $data))) {
                return false;
            }
        }
        if (!$stmt->execute()) {
            return false;
        }
        $result = $stmt->get_result();
        if ($result) {
            return $result;
        }
        return $stmt;
    }

    function report($person, $person_contact, $person_detail, $contact_whom) {
        $this->DB->autocommit(false);

        $contact_id = $this->execute(
            'INSERT INTO `contact_details`(`phone_no`, `email`, `mailing_list`, `mailing_address`, `latitude`, `longitude`) VALUES (?, ?, ?, ?, ?, ?)',
            'ssssss',
            array(
                &$person_contact['phone_no'],
                &$person_contact['email'],
                &$person_contact['mailing_list'],
                &$person_contact['mailing_address'],
                &$person_contact['latitude'],
                &$person_contact['longitude'],
            )
        );

        if ($contact_id) {
            $contact_id = $contact_id->insert_id;
        }
        else {
            return false;
        }

        $person_id = $this->execute(
            'INSERT INTO `persons`(`fname`, `lname`, `gender`, `dob`, `contact_id`) VALUES (?, ?, ?, ?, ?)',
            'ssssi',
            array(
                &$person['fname'],
                &$person['lname'],
                &$person['gender'],
                &$person['dob'],
                &$contact_id,
            )
        );

        if ($person_id) {
            $person_id = $person_id->insert_id;
        }
        else {
            return false;
        }

        $contact_id = $this->execute(
            'INSERT INTO `contact_details`(`phone_no`, `email`, `mailing_list`) VALUES (?, ?, ?)',
            'sss',
            array(
                &$contact_whom['phone_no'],
                &$contact_whom['email'],
                &$contact_whom['mailing_list'],
            )
        );

        if ($contact_id) {
            $contact_id = $contact_id->insert_id;
        }
        else {
            return false;
        }

        $missing_person = $this->execute(
            'INSERT INTO `missing_persons`(`person_id`, `body_marks`, `height`, `weight`, `hair`, `eye_color`, `last_seen`, `contact_id`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)',
            'issssssi',
            array(
                &$person_id,
                &$person_detail['body_marks'],
                &$person_detail['height'],
                &$person_detail['weight'],
                &$person_detail['hair'],
                &$person_detail['eye_color'],
                &$person_detail['last_seen'],
                &$contact_id
            )
        );

        if (!$missing_person) {
            return false;
        }

        return $this->DB->commit();
    }

    function search($person, $person_contact) {
        $search_results = $this->execute(
            'SELECT
                *
            FROM
                `persons` p
                JOIN `contact_details` c ON p.contact_id = c.id
                JOIN `missing_persons` m ON m.person_id = p.id
            WHERE
                p.fname LIKE ?
                OR p.lname LIKE ?
                OR p.gender = ?
                OR p.dob = ?
                OR c.phone_no LIKE ?
                OR c.email LIKE ?',
            'ssssss',
            array(
                &$person['fname'],
                &$person['lname'],
                &$person['gender'],
                &$person['dob'],
                &$person_contact['phone_no'],
                &$person_contact['email']
            )
        );

        if (!$search_results) {
            return false;
        }

        return $search_results->fetch_all(MYSQLI_ASSOC);
    }

}
