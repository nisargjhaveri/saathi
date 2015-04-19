<?php
class mailer extends Library {

	function __construct() {
		$this->load_library('deployment_settings','settings');
		$olddir = getcwd();
		chdir(dirname(__FILE__));
		require("PHPMailer/class.phpmailer.php");
		chdir($olddir);
		$this->mail = new PHPMailer;
		$this->mail->isSMTP();
		$this->mail->SMTPSecure = "tls";
		$this->mail->Host = 'smtp.gmail.com';
		$this->mail->Port = 587;
		$this->mail->SMTPAuth = true;
		$this->mail->Username = $this->settings->notif_email_id();
		$this->mail->Password = $this->settings->notif_email_password();
		$this->mail->FromName = "Saathi Mailer";
	}

	function getMail() {
		return $this->mail;
	}
}
