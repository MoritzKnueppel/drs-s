<?php
class Inbox_model extends CI_Model  {

	function __construct()
	{
	    parent::__construct();
	}
	
	function get_doc($id_car, $id_doc) {
		$this->db->select('
			doc.name,
			doc.pdf,
			doc.mime_type,
			doc.id_doctype
		')
		$this->db->from('doc');
		$this->db->where('doc.id_doc', $id_doc);
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			$result = $query->row();
		}
	}
}