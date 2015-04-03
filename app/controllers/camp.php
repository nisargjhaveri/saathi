<?php

class camp extends Controller {

    function __construct() {
        $this->load_model('camp_model');
    }

    function index() {
        $this->load_view('camp/index');
    }

    function add_new() {
       $added = null;
      

        if (isset($_POST['add_new'])) {
            $added = $this->camp_model->add_new(
                $_POST['name'],
                $_POST['organisation_id'],
                $_POST['camp_head'],
                $_POST['population'],
                $_POST['volunteers'],
                $_POST['status'],
                $_POST['contact_id']
               
            );
        }
        
        $this->load_view('camp/add_new', array(
            'added' => $added
            
        ));
        
    }

}
