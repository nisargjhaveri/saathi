<?php

class missing extends Controller {

     function __construct() {
	  $this->load_model('missing_model');
     }

     function index() {
	  $this->load_view('missing/index');
     }

     function validatePhone($phone) {
	  $regex = "/^((\+\d{0,3})?\d[\s-]?)?[\(\[\s-]{0,2}?\d{1,3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";

	  if( !preg_match( $regex, $phone)) {
	       return false;
	  }

	  return true;
     }

     function validateDate($date) {
	  $dob = explode('-', $date);
	  if (count($dob) == 3) {
	       if (!checkdate($dob[1], $dob[2], $dob[0])) {
		    return false;
	       }
	  }
	  else {
	       return false;
	  }

	  return true;
     }

     function valid() {
	  if( !empty($_POST['person']['dob'])) {
	       if(!$this->validateDate($_POST['person']['dob'])) {
		    return false;
	       }
	  }

	  if( !empty($_POST['person_contact']['phone_no'])) {
	       if(!$this->validatePhone($_POST['person_contact']['phone_no'])) {
		    return false;
	       }
	  }

	  if ( !empty($_POST['person_contact']['email'])) {
	       if (!filter_var($_POST['person_contact']['email'], FILTER_VALIDATE_EMAIL)) {
		    return false;
	       }
	  }

	  if ( !empty($_POST['person_contact']['mailing_list'])) {
	       if (!filter_var($_POST['person_contact']['mailing_list'], FILTER_VALIDATE_EMAIL)) {
		    return false;
	       }
	  }

	  if( !empty($_POST['contact_whom']['phone_no'])) {
	       if(!$this->validatePhone($_POST['contact_whom']['phone_no'])) {
		    return false;
	       }
	  }

	  if ( !empty($_POST['contact_whom']['email'])) {
	       if (!filter_var($_POST['contact_whom']['email'], FILTER_VALIDATE_EMAIL)) {
		    return false;
	       }
	  }

	  if ( !empty($_POST['contact_whom']['mailing_list'])) {
	       if (!filter_var($_POST['contact_whom']['mailing_list'], FILTER_VALIDATE_EMAIL)) {
		    return false;
	       }
	  }

	  return true;

     }

     function report() {
	  $reported = null;
	  $created = null;
	  $mode = "Create";
	  $per_info = null;

	  if ( isset($_POST['report']) ) {
	       if($this->valid()) {
		    $reported = $this->missing_model->report(
			 $_POST['person'],
			 $_POST['person_contact'],
			 $_POST['person_detail'],
			 $_POST['contact_whom']
		    );
	       }
	  }

	  $this->load_view('missing/report', array(
	       'reported' => $reported,
	       'created' => $created,
	       'mode' => $mode,
	       'per_info' => null
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

     function update($per_id = null) {
	  if ($per_id === null) {
	       $this->load_library('http_lib', 'http');
	       $this->http->redirect(base_url().'missing/');
	  }
	  $updated = null;
	  $mode = "Update";
	  $person_info = null;
	  $reported = null;

	  if (isset($_POST['report'])) {
	       $updated = $this->missing_model->update_person(
		    $per_id,
		    $_POST['person'],
		    $_POST['person_contact'],
		    $_POST['person_detail'],
		    $_POST['contact_whom']
	       );
	  }

	  if ($per_id !== null) {
	       $per_info = $this->missing_model->get_person($per_id);
	       $missing_per_info = $this->missing_model->get_missing_person($per_id);
	  }

	  //echo $per_info['fname'];

	  $this->load_view('missing/report', array(
	       'reported' => $reported,
	       'created' => $updated,
	       'mode' => $mode,
	       'per_info' => $per_info,
	       'missing_per_info' => $missing_per_info
	  ));
     }

     /*function list_json() {
	  $org_list = false;

	  $org_list = $this->organisations_model->get_organisations();

	  echo json_encode($org_list);
     }*/

}
