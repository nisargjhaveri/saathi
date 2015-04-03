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

}
