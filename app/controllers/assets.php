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

    function update() {
        $is_success = null;

        $id = null;
        $name = null;
        $description = null;

        if (!empty($_GET['id'])) {
            $id = $_REQUEST['id'];
        }

        if ( null == $id ) {
            //TODO: Set warning or maybe ignore
            header("Location: view");
        }

        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $is_success = $this->assets_model->update(
                $_POST['id'], // asset id
                $_POST['name'],  // asset name
                $_POST['description'] //asset description
            );
        }

        $assets_list = $this->assets_model->get_asset($id);

        if (!empty($assets_list)){
            $name =  $assets_list[0]['name'];
            $description = $assets_list[0]['description'];
        }
        else{
            //TODO: Set warning or maybe ignore
            //If Record with id doesnt exist.
            header("Location: view");
        }
            
        $this->load_view('assets/update', array(
            'is_success' => $is_success,
            'id' => $id,
            'name' => $name,
            'description' => $description
        ));
    }
}
