<?php

class sample_model extends Model {

    function insert($phone_no, $email, $mailing_list) {
        $stmt = $this->DB->prepare("INSERT INTO `contact_details` (phone_no, email, mailing_list) VALUES (?, ?, ?)");
        if (!$stmt->bind_param("sss", $phone_no, $email, $mailing_list)) {
            //echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
            return false;
        }
        if (!$stmt->execute()) {
            //echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
            return false;
        }
        return true;
    }

    function get_list() {
        $result = $this->DB->query("SELECT * FROM `contact_details`");
        if ($result) {
            $contact_list = $result->fetch_all(MYSQLI_ASSOC);
            return $contact_list;
        }
        else {
            return false;
        }
    }

}
