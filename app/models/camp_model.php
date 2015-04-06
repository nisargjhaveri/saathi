<?php

class camp_model extends Model {

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

    function add_new($name, $organisation_id, $population, $volunteers, $status, $fname, $lname, $dob, $gender,
     $ch_phone_no, $ch_email, $ch_mailing_list, $ch_mailing_address, $ch_gis_url,
     $phone_no, $email, $mailing_list, $mailing_address, $gis_url) {
        $this->DB->autocommit(false);
        //camp head contact details

        $camp_head_cd = $this->execute(
            'INSERT INTO `contact_details`(`phone_no`, `email`, `mailing_list`, `mailing_address`, `gis_url`) VALUES (?, ?, ?, ?, ?)',
            'sssss',
            array(
                &$ch_phone_no,
                &$ch_email,
                &$ch_mailing_list,
                &$ch_mailing_address,
                &$ch_gis_url,
            )
        );

        if ($camp_head_cd) {
            $camp_head_cd = $camp_head_cd->insert_id;
        }
        else {
            return false;
        }

        //camp head id

        $camp_head = $this->execute(
            'INSERT INTO `persons`(`fname`, `lname`, `gender`, `dob`, `contact_id`) VALUES (?, ?, ?, ?, ?)',
            'ssssi',
            array(
                &$fname,
                &$lname,
                &$gender,
                &$dob,
                &$camp_head_cd,
            )
        );

        if ($camp_head) {
            $camp_head = $camp_head->insert_id;
        }
        else {
            return false;
        }

        $contact_id = $this->execute(
            'INSERT INTO `contact_details`(`phone_no`, `email`, `mailing_list`, `mailing_address`, `gis_url`) VALUES (?, ?, ?, ?, ?)',
            'sssss',
            array(
                &$phone_no,
                &$email,
                &$mailing_list,
                &$mailing_address,
                &$gis_url,
            )
        );

        if ($contact_id) {
            $contact_id = $contact_id->insert_id;
        }
        else {
            return false;
        }



        $camp_id = $this->execute(
            'INSERT INTO `camps`(`name`,`organisation_id`,`camp_head`,`population`,`volunteers`,`status`,`contact_id`) VALUES (?, ?, ? , ? , ? , ? , ?)',
            'siisssi',
            array(
                &$name,
                &$organisation_id,
                &$camp_head,
                &$population,
                &$volunteers,
                &$status,
                &$contact_id
            )
        );

        if ($camp_id) {
            $camp_id = $camp_id->insert_id;
        }
        else {
            return false;
        }

        return $this->DB->commit();
    }
    function get_camps() {
        $camp_list = false;
        $camp_details = $this->DB->query(
            'SELECT
                c.*,
                cd.*,
                p.*,
                c.id as c_id,
                o.name as organisation_name
            FROM
                `camps` c
                JOIN `contact_details` cd ON c.contact_id = cd.id
                JOIN  `organisations` o ON c.organisation_id = o.id
                JOIN `persons` p ON c.camp_head=p.id;
            ');
        if ($camp_details) {
            $camp_list = $camp_details->fetch_all(MYSQLI_ASSOC);
        }
        return $camp_list;
    }

}
