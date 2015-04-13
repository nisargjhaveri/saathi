<?php

class auth_model extends Model {
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

    function get_user($username, $password_hash) {
        $user = $this->execute(
            'SELECT * FROM `users` WHERE `username` = ? AND `password` = ?',
            'ss',
            array(
                &$username,
                &$password_hash
            )
        );
        if ($user and ($users = $user->fetch_all(MYSQLI_ASSOC))) {
            return $users[0];
        }
        return false;
    }
}
