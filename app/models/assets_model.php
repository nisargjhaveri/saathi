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

    #TODO Duplication of Assets
    #Once autocomplete is implemented we can use a dropdown to choose the
    #assets that are already added to remove duplication
    function insert($name, $description){
        $asset_id = $this->execute(
            'INSERT INTO `assets`(`name`, `description`) VALUES (?, ?)',
            'ss',
            array(
                &$name,
                &$description,
            )
        );

        if (!$asset_id) {
            return false;
        }

        return true;
    }

    function get_assets() {
        $assets_list = false;

        $assets = $this->DB->query(
            'SELECT *
            FROM
            `assets`
            ');

        if ($assets) {
            $assets_list = $assets->fetch_all(MYSQLI_ASSOC);
        }

        return $assets_list;
    }

    function get_asset($id) {
        $asset = false;

        $assets = $this->execute(
            'SELECT * FROM `assets` WHERE `id` = ? ',
            'i',
            array(
                &$id,
            )
        );

        if (!$assets) {
            return false;
        }

        return $assets->fetch_all(MYSQLI_ASSOC)[0];
    }

    function update($id, $name, $description){
        
        $asset_id = $this->execute(
            'UPDATE `assets` SET `name` = ?, `description` = ? WHERE `id` = ?',
            'ssi',
            array(
                &$name,
                &$description,
                &$id,
            )
        );

        if (!$asset_id) {
            return false;
        }

        return true;
    }

    function delete_asset($asset_id) {
        $asset_delete = false;

        $delete_result = $this->execute(
            'DELETE FROM `assets` WHERE id=?',
            'i',
            array(
                &$asset_id
            )
        );

        if ($delete_result && $this->DB->affected_rows === 1) {
            $asset_delete = true;
        }

        return $asset_delete;
    }
}
