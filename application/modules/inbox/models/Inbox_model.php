<?php
class Inbox_model extends CI_Model  {

	function __construct()
	{
	    parent::__construct();
	}
	
	function get_doctype() {
		$data = array(
			/*id_doctype => name,*/
		);
		
		$this->db->select('
			doctype.id_doctype,
			doctype.name
		');
		$this->db->from('doctype');
		$this->db->where('doctype.deleted', 0);
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			
			foreach ($query->result() as $item) {
				$data[$item->id_doctype] = $item->name;
			}
			
		}
		
		return $data;
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
		$this->db->order_by('doc.id_doc asc');
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
	
	function set_doc($id_doc, $id_doctype) {
		$data = array(
			'id_doctype' => $id_doctype,
		);
		
		$this->db->where('id_doc', $id_doc);
		$this->db->update('doc', $data); 
	}
	/*
	 * holt alle docs bist auf das übergebene
	 * @param $id_doc : id des Dokumentes, welches nicht geholt werden soll
	 */
	function get_next_doc($id_doc = -1) {
		$data = -1;
		
		$this->db->select('
			doc.id_doc,
		');
		$this->db->from('doc');
		$this->db->where('doc.deleted', 0);
		$this->db->where('doc.id_doc !=', $id_doc);
		$this->db->where('doc.id_doc >', $id_doc);
		$this->db->where('doc.id_doctype', NULL);
		$this->db->order_by('doc.id_doc asc');
		$query = $this->db->get();
		
		if ($query->num_rows() > 0 AND $id_doc != -1) {
			$result = $query->row();
			
			$data = $result->id_doc;
		}
		
		return $data;
	}
}





























