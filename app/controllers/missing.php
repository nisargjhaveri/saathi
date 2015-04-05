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

    function update() {
        $reported = null;

	$id = $_GET["id"];
       	$con=mysqli_connect("localhost","root","tfghtfgh","saathi");
	$q = "SELECT * FROM persons where id= '$id'";
	$result = mysqli_query($con,$q);
	$tmp_id = 2*$id - 1;
	if($result){
		$per = mysqli_fetch_array($result,MYSQLI_ASSOC);
	}
	$q = "SELECT * FROM missing_persons where id= '$id'";
	$result = mysqli_query($con,$q);
	if($result){
		$per_det = mysqli_fetch_array($result,MYSQLI_ASSOC);
	}
	$q = "SELECT * FROM contact_details where id= '$id'";
	$result = mysqli_query($con,$q);
	if($result){
		$per_cont = mysqli_fetch_array($result,MYSQLI_ASSOC);
	}
	$tmp_id = $tmp_id+1;
	$q = "SELECT * FROM contact_details where id= '$tmp_id'";
	$result = mysqli_query($con,$q);
	if($result){
		$per_cont_w = mysqli_fetch_array($result,MYSQLI_ASSOC);
	}

        if ( isset($_POST['report']) ) {
            $reported = $this->missing_model->report(
                $_POST['person'],
                $_POST['person_contact'],
                $_POST['person_detail'],
		$_POST['contact_whom']
            );
	}

        $this->load_view('missing/report', array(
		'reported' => $reported,
		'per' => $per,
		'per_det' => $per_det,
		'per_cont' => $per_cont,
		'per_cont_w' => $per_cont_w
	));
	$sql = "DELETE FROM persons WHERE id=$id";
	if ($con->query($sql) === TRUE) {}
	$sql = "DELETE FROM missing_persons WHERE id=$id";
	if ($con->query($sql) === TRUE) {}
	$tmp_id = 2*$id-1;
	if ($con->query($sql) === TRUE) {}
	$sql = "DELETE FROM contact_details WHERE id=$tmp_id";
	if ($con->query($sql) === TRUE) {}
	$tmp_id = $tmp_id+1;
	$sql = "DELETE FROM contact_details WHERE id=$tmp_id";
	if ($con->query($sql) === TRUE) {}
	/*if ($con->query($sql) === TRUE) {}
		    echo "Record deleted successfully";
	} else {
		    echo "Error deleting record: " . $con->error;
	}*/
	mysqli_close($con);
    }
}
