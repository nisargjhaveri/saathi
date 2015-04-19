<?php

class requests extends Controller {

    function __construct() {
        $this->load_library('deployment_settings', 'settings');
        if (!$this->settings->request_asset()) {
            $this->load_library('http_lib', 'http');
            $this->http->err_404();
        }
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

    function view() {
        $request_list = false;

        $request_list = $this->requests_model->get_requests();

        $this->load_view('requests/view', array(
            'request_list' => $request_list
        ));
    }

    function delete($request_id = null) {
        $request_delete = false;

        if ($request_id !== null) {
            $request_delete = $this->requests_model->delete_request($request_id);
        }
        session_start();
        $_SESSION['request_delete'] = $request_delete;

        $this->load_library('http_lib', 'http');
        $this->http->redirect(base_url().'requests/view/');
    }

    function supply() {
        $supplied = false;
	    
        if (isset($_POST['supply'])){
	    
           $supplied = $this->requests_model->supply(
	       $_POST['supply_details']
	       );
           
            
            $asset_name = $this->requests_model->get_asset_name($_POST['supply_details']['request_id']);

            $org_id =  $this->requests_model->get_organisation_id($_POST['supply_details']['request_id']);
            $org_contact_details = $this->requests_model->get_contact_details($org_id);
            $org_email = $org_contact_details['email'];
            $org_name = $org_contact_details['name'];
            $supplier_contact_details = $this->requests_model->get_contact_details($_POST['supply_details']['supplier_id']);
            $supplier_email = $supplier_contact_details['email'];
            $supplier_phone_no = $supplier_contact_details['phone_no'];
            $supplier_name = $supplier_contact_details['name'];
            $success = null;
            $error = null;
            $this->load_library('mailer','mailer');
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
                $mail->AddAddress($org_email);
                $mail->Subject = "Supply for ". $asset_name;
                $mail->Body = "Hi ". $org_name . ",<br/>". "Your Request for ". $asset_name . " has been fulfilled by ". $supplier_name . ".<br/> Contact Details:<br/>" . $supplier_email . "<br/>" . $supplier_phone_no . "<br/>  <b>Saathi Mailer</b>";
                $mail->AltBody = "Hi ". $org_name . "has been fulfilled by ". $supplier_name . ".Contact Details:" . $supplier_email . $supplier_phone_no . "Saathi Mailer";
                $success = $mail->Send();
            }
        }
	    $this->load_library('http_lib', 'http');
	    $this->http->redirect(base_url().'requests/view');

      }


}
