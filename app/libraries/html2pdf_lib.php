<?php
class html2pdf_lib extends Library {

    function __construct() {
        require("html2pdf". DIRECTORY_SEPARATOR ."html2pdf.class.php");
        $this->html2pdf = new HTML2PDF('P', 'A4', 'en');
    }

    function getobject() {
    	return $this->html2pdf;
    }
}