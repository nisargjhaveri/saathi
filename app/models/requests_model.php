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

    function report($details) {
        $this->DB->autocommit(false);

        $request_id = $this->execute(
            'INSERT INTO `requests`(`organisation_id`, `asset_id`, `date`,`priority`) VALUES (?, ?, ?, ?)',
            'ssss',
            array(
                &$details['organisation_id'],
                &$details['asset_id'],
                &$details['date'],
		&$details['priority'],
            )
        );

        if ($request_id) {
            $request_id = $request_id->insert_id;
        }
        else {
            return false;
        }


        return $this->DB->commit();
    }

}
