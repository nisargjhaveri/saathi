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

    function delete($asset_id = null) {
        $asset_delete = false;

        if ($asset_id !== null) {
            $asset_delete = $this->assets_model->delete_asset($asset_id);
        }
        session_start();
        $_SESSION['asset_delete'] = $asset_delete;

        $this->load_library('http_lib', 'http');
        $this->http->redirect(base_url().'assets/view/');
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

        $asset = $this->assets_model->get_asset($id);

        if(!$asset){
            //TODO: Show warning
            //If Record with id doesnt exist.
            header("Location: view");
        }

        $name =  $asset['name'];
        $description = $asset['description'];
            
        $this->load_view('assets/update', array(
            'is_success' => $is_success,
            'id' => $id,
            'name' => $name,
            'description' => $description
        ));
    }
}
