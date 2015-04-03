<?php

class organisations extends Controller {

    function __construct() {
        $this->load_model('organisations_model');
    }

    function index() {
        $this->load_view('organisations/index');
    }

    function create() {
        $created = null;

        if (isset($_POST['submit'])) {
            $created = $this->organisations_model->create_org(
                $_POST['org'],
                $_POST['contact']
            );
        }

        $this->load_view('organisations/create', array(
            'created' => $created
        ));
    }

    function view() {
        $org_list = false;

        $org_list = $this->organisations_model->get_organisations();

        $this->load_view('organisations/view', array(
            'org_list' => $org_list
        ));
    }

    function delete($org_id = null) {
        $org_delete = false;

        if ($org_id !== null) {
            $org_delete = $this->organisations_model->delete_organisations($org_id);
        }
        session_start();
        $_SESSION['org_delete'] = $org_delete;

        $this->load_library('http_lib', 'http');
        $this->http->redirect(base_url().'organisations/view/');
    }

    function list_json() {
        $org_list = false;

        $org_list = $this->organisations_model->get_organisations();

        echo json_encode($org_list);
    }

}
