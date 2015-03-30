<?php

class missing extends Controller {

    function __construct() {
        $this->load_model('missing_model');
    }

    function index() {
        $this->load_view('missing/index');
    }

    function report() {
        $reported = null;

        if ( isset($_POST['report']) ) {
            $reported = $this->missing_model->report(
                $_POST['person'],
                $_POST['person_contact'],
                $_POST['person_detail'],
                $_POST['contact_whom']
            );
        }

        $this->load_view('missing/report', array(
            'reported' => $reported
        ));
    }

    function search() {
        $search_results = null;
        if ( isset($_POST['search']) ) {
            $search_results = $this->missing_model->search(
                $_POST['person'],
                $_POST['person_contact']
            );
        }

        if ( $search_results !== null ){
            $this->load_view('missing/search_results', array(
                'results' => $search_results
            ));
        }
        else {
            $this->load_view('missing/search');
        }
    }

}
