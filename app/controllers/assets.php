<?php
class assets extends Controller {
    function __construct() {
        $this->load_model('assets_model');
    }

    function index() {
        $this->load_view('assets/index');
    }

    function insert() {
        $is_success = null;

        if (isset($_POST['submit'])) {
            $is_success = $this->assets_model->insert(
                $_POST['name'],  // asset name
                $_POST['description'] //asset description
            );
        }
        $this->load_view('assets/insert', array(
            'is_success' => $is_success
        ));
    }

    function view() {
        $assets_list = false;

        $assets_list = $this->assets_model->get_assets();

        $this->load_view('assets/view', array(
            'assets_list' => $assets_list
        ));
    }

    function list_json() {
        $assets_list = false;

        $assets_list = $this->assets_model->get_assets();

        echo json_encode($assets_list);
    }
}
