<?php

class sample extends Controller {

    function __construct() {
        $this->load_model('sample_model');
    }

    function index() {
        $success = null;

        if (isset($_POST['submit'])) {
            $success = $this->sample_model->insert(
                $_POST['phone_no'],
                $_POST['email'],
                $_POST['mailing_list']
            );
        }

        $this->load_view('sample', array(
            'success' => $success
        ));
    }

    function list_data() {
        $list = $this->sample_model->get_list();

        $this->load_view('sample_list', array(
            'list' => $list
        ));
    }

}
