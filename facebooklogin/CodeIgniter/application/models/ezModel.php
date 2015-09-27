<?php
class ez_model extends CI_Model {
	function ez_model() {
		// Call the Model constructor
		parent::_construct ();
	}
	function getData() {
		// Query the data table for every record and row
		$query = $this->db->get ( 'data' );
		if ($query->num_rows () > 0) {
			return $query->result ();
		} else {
			// show_error('Database is empty!');
		}
	}
}
?>