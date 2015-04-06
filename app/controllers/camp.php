<?php

class camp extends Controller {

    function __construct() {
        $this->load_model('camp_model');
    }

    function index() {
        $this->load_view('camp/index');
    }

    function insert() {
        $is_success = null;
        if (isset($_POST['submit'])) {
            $is_success = $this->camp_model->add_new(
                //camp
                $_POST['name'],
                $_POST['organisation_id'],
                $_POST['population'],
                $_POST['volunteers'],
                $_POST['status'],
                //camp head
                $_POST['fname'],
                $_POST['lname'],
                $_POST['dob'],
                $_POST['gender'],
                $_POST['ch_phone_no'],
                $_POST['ch_email'],
                $_POST['ch_mailing_list'],
                $_POST['ch_mailing_address'],
                //contact details for camp
                $_POST['phone_no'],
                $_POST['email'],
                $_POST['mailing_list'],
                $_POST['mailing_address'],
                $_POST['latitude'],
                $_POST['longitude']
            );
        }

        $this->load_view('camp/insert', array(
            'is_success' => $is_success
        ));

    }
    function view() {
        
        $camp_list = false;
        $camp_list = $this->camp_model->get_camps();
            
        $this->load_view('camp/view', array(
            'camp_list' => $camp_list
        ));
    }

    function delete($camp_id = null) {
        $camp_delete = false;

        if ($camp_id !== null) {
            $camp_delete = $this->camp_model->delete_camp($camp_id);
        }
        session_start();
        $_SESSION['camp_delete'] = $camp_delete;

        $this->load_library('http_lib', 'http');
        $this->http->redirect(base_url().'camp/view/');
    }

}
