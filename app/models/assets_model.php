<?php

class assets_model extends Model {

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

    function insert($name, $description) {
        
        #to do check for duplication of rows maybe
        $asset_id = $this->execute(
            'INSERT INTO `assets`(`name`, `description`) VALUES (?, ?)',
            'ss',
            array(
                &$name,
                &$description,
            )
        );

        if (! $asset_id) {
            return false;
        }
        return true;
    }
    
}
