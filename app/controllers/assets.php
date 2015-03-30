<?php

class assets extends Controller {

    function __construct() {
        $this->load_model('assets_model');
    }

    function index() {
        $this->load_view('assets/index');
    }

    function add() {
        $success = null;
        //validation is required
        if (isset($_POST['submit'])) {
            $success = $this->assets_model->insert(
                $_POST['name'],  // asset name
                $_POST['description']
            );
        }

        $this->load_view('assets/add_assets', array(
            'success' => $success
        ));
    }

    function list_data() {
        $list = $this->assets_model->get_list();

        $this->load_view('assets_list', array(
            'list' => $list
        ));
    }

}
