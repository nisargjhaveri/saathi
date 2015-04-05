<?php

class organisations_model extends Model {

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

    function create_org($org, $contact) {
        $this->DB->autocommit(false);

        $contact_id = $this->execute(
            'INSERT INTO `contact_details`(`phone_no`, `email`, `mailing_list`, `mailing_address`, `latitude`, `longitude`) VALUES (?, ?, ?, ?, ?, ?)',
            'ssssss',
            array(
                &$contact['phone_no'],
                &$contact['email'],
                &$contact['mailing_list'],
                &$contact['mailing_address'],
                &$contact['latitude'],
                &$contact['longitude'],
            )
        );

        if ($contact_id) {
            $contact_id = $contact_id->insert_id;
        }
        else {
            return false;
        }

        $org_id = $this->execute(
            'INSERT INTO `organisations`(`name`, `home_country`, `founded`, `description`, `contact_id`) VALUES (?, ?, ?, ?, ?)',
            'ssssi',
            array(
                &$org['name'],
                &$org['home'],
                &$org['founded'],
                &$org['desc'],
                &$contact_id
            )
        );

        if (!$org_id) {
            return false;
        }

        return $this->DB->commit();
    }

    function get_organisations() {
        $org_list = false;
        $org_details = $this->DB->query(
            'SELECT
                *,
                o.id as id
            FROM
                `organisations` o
                JOIN `contact_details` c ON o.contact_id = c.id
            ');
        if ($org_details) {
            $org_list = $org_details->fetch_all(MYSQLI_ASSOC);
        }
        return $org_list;
    }

    function delete_organisations($org_id) {
        $org_delete = false;

        $delete_result = $this->execute(
            'DELETE FROM `organisations` WHERE id=?',
            'i',
            array(
                &$org_id
            )
        );

        if ($delete_result && $this->DB->affected_rows === 1) {
            $org_delete = true;
        }

        return $org_delete;
    }

}
