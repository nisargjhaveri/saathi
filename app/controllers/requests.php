<?php

class requests extends Controller {

    function __construct() {
        $this->load_model('requests_model');
    }

    function index() {
        $this->load_view('requests/index');
    }

    function add() {
        $requested = null;

        if ( isset($_POST['request']) ) {
            $requested = $this->requests_model->add(
                $_POST['details']
            );
        }

        $this->load_view('requests/add', array(
            'requested' => $requested
        ));
    }
    
    function supply(){
	    $supplied = null;

	    if(isset($_POST['supply'])){
		    $supplied = $this->requests_model->supply(
				    $_POST['supply_details']
				    );
	    }

	    $this->load_view('requests/supply',array(
			'supplied' => $supplied
				    ));
    }
}
