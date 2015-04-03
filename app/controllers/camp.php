<?php
class camp extends Controller {
	function __construct() {
		$this->load_model('camp_model');
	}
	function index() {
		$this->load_view('camp/index');
	}
	function create() {
		$added = null;

		if (isset($_POST['submit'])) {
			$added = $this->camp_model->add_new(
					$_POST['name'],
					$_POST['organisation'],
					$_POST['camphead'],
					$_POST['population'],
					$_POST['volunteers'],
					$_POST['status'],
					$_POST['email'],
					$_POST['mailing_list'],
					$_POST['phone']

					);
		}

		$this->load_view('camp/create', array(
					'added' => $added

					));

	}
}
