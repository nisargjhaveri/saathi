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

    function get_requests() {
        $request_list = false;
        $request_details = $this->DB->query(
            'SELECT
                *,
            org.name as org,
            asset.name as asset,
            req.id as id
            FROM
                `requests` req
                JOIN `organisations` org ON req.organisation_id = org.id
                JOIN `assets` asset ON req.asset_id = asset.id
            ');
        if ($request_details) {
            $request_list = $request_details->fetch_all(MYSQLI_ASSOC);
        }
        return $request_list;
    }

    function delete_request($request_id) {
        $request_delete = false;

        $delete_result = $this->execute(
            'DELETE FROM `requests` WHERE id=?',
            'i',
            array(
                &$request_id
            )
        );

        if ($delete_result && $this->DB->affected_rows === 1) {
            $request_delete = true;
        }

        return $request_delete;
    }

}
