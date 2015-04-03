<?php

class camp extends Controller {

    function __construct() {
        $this->load_model('camp_model');
    }

    function index() {
        $this->load_view('camp/index');
    }


    function view() {
        
        $camp_list = false;

        $camp_list = $this->camp_model->get_camps();
            
        $this->load_view('camp/view', array(
            'camp_list' => $camp_list
        ));
    }

}
