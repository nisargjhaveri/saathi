<?php

class missing extends Controller {

    function __construct() {
        $this->load_library('deployment_settings', 'settings');
        if (!$this->settings->missing_person()) {
            $this->load_library('http_lib', 'http');
            $this->http->err_404();
        }
        $this->load_model('missing_model');
    }

    function index() {
        $this->load_view('missing/index');
    }

    private function validatePhone($phone) {
        $regex = "/^((\+\d{0,3})?\d[\s-]?)?[\(\[\s-]{0,2}?\d{1,3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";

        if( !preg_match( $regex, $phone)) {
            return false;
        }

        return true;
    }

    private function validateBlood($blood_group) {
        $regex = "/^(A|B|AB|O)(\+|-)$/i";

        if( !preg_match( $regex, $blood_group)) {
            return false;
        }

        return true;
    }

    private function validateDate($date) {
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

    private function valid() {
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

        if ( !empty($_POST['person_detail']['blood_group'])) {
            if(!$this->validateBlood($_POST['person_detail']['blood_group'])) {
                return false;
            }
        }

        return true;

    }

    function report() {
        $reported = null;

        if ( isset($_POST['report']) ) {

            if (!empty($_FILES['person_image']) && !$_FILES['person_image']['error']
                && $_FILES['person_image']['size'] && exif_imagetype($_FILES['person_image']['tmp_name'])) {
                    $image = file_get_contents($_FILES['person_image']['tmp_name']);
            }
            else {
                $image = '';
            }

            if($this->valid()) {
                $reported = $this->missing_model->report(
                    $_POST['person'],
                    $image,
                    $_POST['person_contact'],
                    $_POST['person_detail'],
                    $_POST['contact_whom']
                );
            }
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

    function view() {
        $missing_person_list = false;

        $missing_person_list = $this->missing_model->get_missing();

        $this->load_view('missing/view', array(
            'missing_person_list' => $missing_person_list
        ));
    }

    function img($id) {
        $img = $this->missing_model->get_img($id);
        if (!$img) {
            header('HTTP/1.0 404 Not Found');
            exit();
        }

        $tmpfname = tempnam(sys_get_temp_dir(), "saathi_img");
        $temp = fopen($tmpfname, "wb");
        fwrite($temp, $img);
        fclose($temp);

        $ctype = exif_imagetype($tmpfname);
        if ($ctype !== false) $ctype = image_type_to_mime_type($ctype);

        unlink($tmpfname);

        header('Content-type: ' . $ctype);
        echo $img;
    }

}
