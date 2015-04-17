<?php
class auth extends Controller {
    function __construct() {
        $this->load_library('auth_lib');
    }

    function signup() {
        $this->load_model('auth_model');
        $error = '';
        if (isset($_POST['signup'])) {
            if (($_POST['password'] == $_POST['conf_password'])
                && !empty($_POST['username'])
                && !empty($_POST['password']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $role = 'admin';
                $success = $this->auth_model->add_user(
                    $username,
                    $this->auth_lib->hash_pass($username, $password),
                    $role
                );
                if (!$success) $error = "Could not register";
            }
            else {
                $error = "Invalid inputs";
            }
        }
        $this->load_view('auth/signup', array(
            'error' => $error
        ));
    }

    function login() {
        if ($this->auth_lib->get_user()) {
            echo "Already logged in";
            exit();
        }

        $error = '';

        if (isset($_POST['login'])) {
            if (!$this->auth_lib->login($_POST['username'], $_POST['password'])) {
                $error = "Could not login";
            }
            else {
                $this->load_library('http_lib', 'http');
                $this->http->redirect(base_url());
            }
        }
        $this->load_view('auth/login', array(
            'error' => $error
        ));
    }

    function logout() {
        $this->auth_lib->logout();
        $this->load_library('http_lib', 'http');
        $this->http->redirect(base_url());
    }
}
