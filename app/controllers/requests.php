<?php

class requests extends Controller {

    function __construct() {
        $this->load_model('requests_model');
    }

    function index() {
        $this->load_view('requests/index');
    }

    function requests() {
        $requested = null;

        if ( isset($_POST['requests']) ) {
            $requested = $this->missing_model->report(
                $_POST['details']
            );
        }

        $this->load_view('requests/requests', array(
            'requested' => $requested
        ));
    }

}
