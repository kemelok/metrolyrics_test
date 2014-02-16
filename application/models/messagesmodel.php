<?php

class Messagesmodel extends CI_Model {

	//these are public so they can be written to by getList
	public $name;
	public $message;
	public $createtime;

	public function createNew($name, $message) {
		$this->createtime = date("Y-m-d H:i:s");
		$this->message = $message;
		$this->name = $name;
		return $this;
	}

	/*** 
	** This function validates the required fields of the object model before submitting
	**/
	public function validate() {
		$errorMsg = array();

		if (empty($this->name)) {
			$errorMsg[] = $this->lang->line('nameFieldError');
		}

		if (empty($this->message)) {
			$errorMsg[] = $this->lang->line('msgFieldError');
		}

		if (!empty($errorMsg)){
			throw new Exception(implode("<br/>",$errorMsg));
		}
	}


	/*** 
	** This function saves the object model
	**/
	public function save() {
	
		$this->db->insert('messages', get_object_vars($this)); 
		$error = $this->db->_error_message();
		
		if (!empty($error)) {
			throw new Exception('Error Saving please contact sysadmin');
			//normally i would do something also to capture and email an emergency team here 
			//(making sure not to flood with emails)
			// At cedars we built a catch all from the core db where any error would then be sent to the developers with informaiton
			// Writing to a file to check against spamming then show a special out of order page.
		}
	}

	/*** 
	** This function grabs a list of 
	**/
	public function getList() {
		$query = $this->db->get('messages');
		//Make it a habit not to return any handle data for future phpunit tests etc...
		//Normally i would make a helper for this 
		$result = array();

		foreach ($query->result('Messagesmodel') as $row) {
			$result[] = $row;
		}
		return $result;
	}
}