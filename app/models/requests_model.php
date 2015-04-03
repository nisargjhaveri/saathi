<?php

class requests_model extends Model {

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

    function add($details) {
        $this->DB->autocommit(false);
        $details['date'] = date("Y/m/d");
        $requests_id = $this->execute(
            'INSERT INTO requests(organisation_id,asset_id, request_date,priority) VALUES (?,?, ?, ?)',
            'iisi',
            array(
                &$details['organisation_id'],
                &$details['asset_id'],
                &$details['date'],
		&$details['priority'],
            )
        );
        if ($requests_id) {
            $requests_id = $requests_id->insert_id;
        }
        else {
            return false;
        }


        return $this->DB->commit();
    }

}
