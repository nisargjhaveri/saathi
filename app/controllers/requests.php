<?php

class requests extends Controller {

    function __construct() {
        $this->load_model('requests_model');
    }

    function index() {
        $this->load_view('requests/index');
    }

    function add() {
        $requested = null;

        if ( isset($_POST['request']) ) {
            $requested = $this->requests_model->add(
                $_POST['details']
            );
        }

        $this->load_view('requests/add', array(
            'requested' => $requested
        ));
    }

    function view() {
        $request_list = false;

        $request_list = $this->requests_model->get_requests();

        $this->load_view('requests/view', array(
            'request_list' => $request_list
        ));
    }

    function delete($request_id = null) {
        $request_delete = false;

        if ($request_id !== null) {
            $request_delete = $this->requests_model->delete_request($request_id);
        }
        session_start();
        $_SESSION['request_delete'] = $request_delete;

        $this->load_library('http_lib', 'http');
        $this->http->redirect(base_url().'requests/view/');
    }

}
