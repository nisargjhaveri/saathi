<?php
class http_lib extends Library {

    function __construct() {
    }

    function err_404() {
        header('HTTP/1.0 404 Not Found');
        $this->load_view('404');
        exit();
    }

    function redirect($url) {
        header('Location: ' . $url);
        exit();
    }

    function canonical_of($url) {
        header('Link: <' . $url . '>; rel="canonical"');
    }

}
