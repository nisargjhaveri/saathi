<?php

class sample extends Controller {

    function __construct() {
        $this->load_model('sample_model');
    }

    function index() {
        $success = null;

        if (isset($_POST['submit'])) {
            $success = $this->sample_model->insert(
                $_POST['phone_no'],
                $_POST['email'],
                $_POST['mailing_list']
            );
        }

        $this->load_view('sample', array(
            'success' => $success
        ));
    }

    function list_data() {
        $list = $this->sample_model->get_list();

        $this->load_view('sample_list', array(
            'list' => $list
        ));
    }

    function sample_send_mail() {
        $success = null;
        $error = null;
        $this->load_library('mailer','mailer');
        if (isset($_POST['submit'])) {
    	    $mail = $this->mailer->getMail();
    	    if($mail->Username == "")
    	    { 
    	    	$error = "Mail id not filled in Config File. Kindly fill email id in config file to send emails";
                $success = False;
    	    }
    	    else if($mail->Password == "")
    	    {
    	    	$error = "Password not filled in Config File. Kindly fill password in config file to send emails";
                $success = False;
    	    }
    	    else
    	    {
    	    	$mail->AddAddress($_POST['email']);
            	$mail->Subject = $_POST['subject'];
    	    	$mail->Body = $_POST['body'];
    	    	$mail->AltBody = $_POST['body'];
    	    	$success = $mail->Send();
            	//$error = $mail->ErrorInfo;
    	    }
        }
	    $this->load_view('sample_send_mail', array(
            'success' => $success
            //'error' => $error
        ));
    }
}
