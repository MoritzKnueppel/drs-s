<?php
class Inbox_model extends CI_Model  {

	function __construct()
	{
	    parent::__construct();
	}
	
	function get_doc($id_doc=-1) {
		$data = array(
			'id_doc'     => '',
			'name'       => '',
			'pdf'        => '',
			'mime_type'  => '',
			'id_doctype' => '',
		);
		
		$this->db->select('
			doc.id_doc,
			doc.name,
			doc.pdf,
			doc.mime_type,
			doc.id_doctype
		');
		$this->db->from('doc');
		if ($id_doc != -1) {
			$this->db->where('doc.id_doc', $id_doc);
		}
		$this->db->where('doc.deleted', 0);
		$this->db->where('doc.id_doctype', NULL);
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			$result = $query->row();
			
			$data['id_doc']     = $result->id_doc;
			$data['name']       = $result->name;
			$data['pdf']        = $result->pdf;
			$data['mime_type']  = $result->mime_type;
			$data['id_doctype'] = $result->id_doctype;
		}
		
		return $data;
	}
}