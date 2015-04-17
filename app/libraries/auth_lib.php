<?php
class auth_lib extends Library {

    function __construct() {
        session_start();
    }

    /**
     * Require on of the role to proceed
     * @param  Array $role Roles allowed
     */
    function require_role($role) {
        if (!isset($_SESSION['auth']) || empty($_SESSION['auth']['logged'])) {
            echo "Auth required.";
            exit();
        }
        if (!is_array($role)) {
            if (is_string($role)) {
                $role = [$role];
            }
            else {
                $role = [];
            }
        }
        if (!in_array($_SESSION['auth']['role'], $role)) {
            echo "You don't have enough permission.";
            exit();
        }
        // Else, everything is fine! Go ahead.
    }

    function get_user() {
        if (isset($_SESSION['auth']) && $_SESSION['auth']['logged']) {
            return $_SESSION['auth'];
        }
        else {
            return false;
        }
    }

    function hash_pass($username, $password) {
        // TODO: Improve this
        return sha1($password);
    }

    function login($username, $password) {
        $this->load_model('auth_model');
        $user = $this->auth_model->get_user($username, $this->hash_pass($username, $password));
        if ($user) {
            $_SESSION['auth'] = array(
                'logged' => true,
                'username' => $user['username'],
                'role' => $user['role']
            );
            return true;
        }
        else {
            return false;
        }
    }

    function logout() {
        $_SESSION['auth'] = array(
            'logged' => false
        );
    }

}
