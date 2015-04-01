<?php

class camp_model extends Model {

	private function execute($sql, $datatype = null, $data = array()) {
		$stmt = $this->DB->prepare($sql);
		if (!$stmt) {
			return false;
		}
		if (!empty($datatype) && !empty($data)) {
			if (!call_user_func_array(array($stmt, "bind_param"), array_merge([$datatype], $data))) {
				return false;
			}
		}
		if (!$stmt->execute()) {
			return false;
		}
		$result = $stmt->get_result();
		if ($result) {
			return $result;
		}
		return $stmt;
	}

	function add_new($name, $organisation_id, $camp_head, $population, $volunteers, $status, $email , $mailing_lsit ,$phone ) {
		$this->DB->autocommit(false);
		$contact_id = $this->execute('INSERT INTO `contact_details`(`phone_no`, `email`, `mailing_list`) VALUES ($phone,$email,$mailing_lsit)','ss');
		
		$camp_id = $this->execute('INSERT INTO `camps`(`name`,`organisation_id`,`camp_head`,`population`,`volunteers`,`status`) VALUES ($name,$organisation_id, $camp_head, $population ,$volunteers ,$status)',
				'siisssi');


		return $this->DB->commit();
	}

}
