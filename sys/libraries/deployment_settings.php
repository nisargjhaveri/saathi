<?php
class deployment_settings extends Library {
    
    function __construct() {
    }

    private function get_settings($var_name, $default_value) {
        global $deployment_settings;
        if (isset($deployment_settings[$var_name])) {
            return $deployment_settings[$var_name];
        } else {
            return $default_value;
        }
    }

    function disasters() {
        $default_disaster = array(
            "fire",
            "earthquake",
            "cyclone",
            "epidemic"
        );
        return $this->get_settings("disasters", $default_disaster);
    }

    function missing_person() {
        return $this->get_settings("missing_person", true);
    }

    function request_asset() {
        return $this->get_settings("request_asset", true);
    }

    function notif_email_id() {
        return $this->get_settings("notif_email_id", '');
    }

    function notif_email_password() {
        return $this->get_settings("notif_email_password", '');
    }

}
