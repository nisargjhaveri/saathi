<?php

class missing_model extends Model {

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

	function report($person, $person_contact, $person_detail, $contact_whom) {
		$this->DB->autocommit(false);

		$contact_id = $this->execute(
			'INSERT INTO `contact_details`(`phone_no`, `email`, `mailing_list`, `mailing_address`, `latitude`, `longitude`) VALUES (?, ?, ?, ?, ?, ?)',
			'ssssss',
			array(
				&$person_contact['phone_no'],
				&$person_contact['email'],
				&$person_contact['mailing_list'],
				&$person_contact['mailing_address'],
				&$person_contact['latitude'],
				&$person_contact['longitude'],
			)
		);

		if ($contact_id) {
			$contact_id = $contact_id->insert_id;
		}
		else {
			return false;
		}

		$person_id = $this->execute(
			'INSERT INTO `persons`(`fname`, `lname`, `gender`, `dob`, `contact_id`) VALUES (?, ?, ?, ?, ?)',
			'ssssi',
			array(
				&$person['fname'],
				&$person['lname'],
				&$person['gender'],
				&$person['dob'],
				&$contact_id,
			)
		);

		if ($person_id) {
			$person_id = $person_id->insert_id;
		}
		else {
			return false;
		}

		$contact_id = $this->execute(
			'INSERT INTO `contact_details`(`phone_no`, `email`, `mailing_list`) VALUES (?, ?, ?)',
			'sss',
			array(
				&$contact_whom['phone_no'],
				&$contact_whom['email'],
				&$contact_whom['mailing_list'],
			)
		);

		if ($contact_id) {
			$contact_id = $contact_id->insert_id;
		}
		else {
			return false;
		}

		$missing_person = $this->execute(
			'INSERT INTO `missing_persons`(`person_id`, `body_marks`, `height`, `weight`, `hair`, `eye_color`, `last_seen`, `contact_id`, `status`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, "Missing")',
			'issssssi',
			array(
				&$person_id,
				&$person_detail['body_marks'],
				&$person_detail['height'],
				&$person_detail['weight'],
				&$person_detail['hair'],
				&$person_detail['eye_color'],
				&$person_detail['last_seen'],
				&$contact_id
			)
		);

		if (!$missing_person) {
			return false;
		}

		return $this->DB->commit();
	}

	function search($person, $person_contact) {
		$search_results = $this->execute(
			'SELECT
			*
			FROM
			`persons` p
			JOIN `contact_details` c ON p.contact_id = c.id
			JOIN `missing_persons` m ON m.person_id = p.id
			WHERE
			p.fname LIKE ?
			OR p.lname LIKE ?
			OR p.gender = ?
			OR p.dob = ?
			OR c.phone_no LIKE ?
			OR c.email LIKE ?',
			'ssssss',
			array(
				&$person['fname'],
				&$person['lname'],
				&$person['gender'],
				&$person['dob'],
				&$person_contact['phone_no'],
				&$person_contact['email']
			)
		);

		if (!$search_results) {
			return false;
		}

		return $search_results->fetch_all(MYSQLI_ASSOC);
	}

	function get_person($per_id) {
		$per_info = false;
		$per_detail = $this->execute(
			'SELECT
			*,
			o.id as id
			FROM
			`persons` o
			JOIN `contact_details` c ON o.contact_id = c.id
			WHERE
			o.id=?
			', 'i',
			array(
				&$per_id
			)
		);
		if ($per_detail) {
			$per_info = $per_detail->fetch_assoc();
		}
		return $per_info;
	}

	function get_missing_person($per_id) {
		$per_info = false;
		$per_detail = $this->execute(
			'SELECT
			*,
			o.id as id
			FROM
			`missing_persons` o
			JOIN `contact_details` c ON o.contact_id = c.id
			WHERE
			o.id=?
			', 'i',
			array(
				&$per_id
			)
		);
		if ($per_detail) {
			$per_info = $per_detail->fetch_assoc();
		}
		return $per_info;
	}

	function update_person($per_id, $person, $person_contact, $person_detail, $contact_whom) {
		$this->DB->autocommit(false);

		$contact_id = $this->execute(
			'SELECT
			contact_id
			FROM
			`persons`
			WHERE
			id=?
			', 'i',
			array(
				&$per_id
			)
		);

		if($contact_id) {
			$contact_id = $contact_id->fetch_assoc()['contact_id'];
		} else {
			return false;
		}

		$person_det1 = $this->execute(
			'UPDATE
			`persons`
			SET
			fname=?,
			lname=?,
			gender=?,
			dob=?
			WHERE
			id=?
			', 'ssssi',
			array(
				&$person['fname'],
				&$person['lname'],
				&$person['gender'],
				&$person['dob'],
				&$per_id
			)
		);

		if(!$person_det1) {
			return false;
		}

		if (($this->DB->affected_rows !== 1) && ($this->DB->affected_rows !== 0)) {
			return false;
		}

		$person_cont1 = $this->execute(
			'UPDATE
			`contact_details`
			SET
			phone_no=?,
			email=?,
			mailing_list=?,
			mailing_address=?,
			longitude=?,
			latitude=?
			WHERE
			id=?
			', 'ssssssi',
			array(
				&$person_contact['phone_no'],
				&$person_contact['email'],
				&$person_contact['mailing_list'],
				&$person_contact['mailing_address'],
				&$person_contact['longitude'],
				&$person_contact['latitude'],
				&$contact_id
			)
		);

		if(!$person_cont1) {
			return false;
		}

		if (($this->DB->affected_rows !== 1) && ($this->DB->affected_rows !== 0)) {
			return false;
		}

		$person_det2 = $this->execute(
			'UPDATE
			`missing_persons`
			SET
			body_marks=?,
			height=?,
			hair=?,
			eye_color=?,
			last_seen=?,
			status=?
			WHERE
			id=?
			', 'ssssssi',
			array(
				&$person_detail['body_marks'],
				&$person_detail['height'],
				&$person_detail['hair'],
				&$person_detail['eye_color'],
				&$person_detail['last_seen'],
				&$person_detail['status'],
				&$per_id
			)
		);

		if (!$person_det2) {
			return false;
		}

		if (($this->DB->affected_rows !== 1) && ($this->DB->affected_rows !== 0)) {
			return false;
		}

		$contact_id = $this->execute(
			'SELECT
			contact_id
			FROM
			`missing_persons`
			WHERE
			id=?
			', 'i',
			array(
				&$per_id
			)
		);

		if($contact_id) {
			$contact_id = $contact_id->fetch_assoc()['contact_id'];
		} else {
			return false;
		}
		$person_cont2 = $this->execute(
			'UPDATE
				`contact_details`
			SET
				phone_no=?,
				email=?,
				mailing_list=?
			WHERE
				id=?
			', 'sssi',
			array(
				&$contact_whom['phone_no'],
				&$contact_whom['email'],
				&$contact_whom['mailing_list'],
				&$contact_id
			)
		);

		if(!$person_cont2) {
			return false;
		}

		if (($this->DB->affected_rows !== 1) && ($this->DB->affected_rows !== 0)) {
			return false;
		}

		return $this->DB->commit();
	}

}
