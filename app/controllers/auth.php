<?php
class auth extends Controller {
    function __construct() {
        $this->load_library('auth_lib');
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
    }
}
