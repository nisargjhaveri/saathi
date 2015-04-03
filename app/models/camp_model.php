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

    function get_camps() {

        $camp_list = false;
        $camp_details = $this->DB->query(
            'SELECT
                c.*,
                cd.*,
                o.name as organisation_name

            FROM
                `camps` c
                JOIN `contact_details` cd ON c.contact_id = cd.id
                JOIN  `organisations` o ON c.organisation_id = o.id
            ');
        if ($camp_details) {
            $camp_list = $camp_details->fetch_all(MYSQLI_ASSOC);
        }
        return $camp_list;

    }

}
