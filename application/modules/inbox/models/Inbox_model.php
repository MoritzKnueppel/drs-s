<?php
class Inbox_model extends CI_Model  {

	function __construct()
	{
	    parent::__construct();
	}
	
	/*
	 * Holt alle Typen, die einem Dokument zugeoprdnet werden können
	 */
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
	
	/*
	 * holt alle cars die einem dokument zugeordnet werden können
	 */
	function get_all_car() {
		$data = array(
			/*id_doctype => name,*/
		);
		
		$this->db->select('
			car.id_car,
			car.registration_number
		');
		$this->db->from('car');
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			
			foreach ($query->result() as $item) {
				$data[$item->id_car] = $item->registration_number;
			}
			
		}
		
		return $data;
	}
	
	/*
	 * holt ein dokument aus der DB
	 * geordnet nach der ID wird das oberste zurückgegeben
	 * @param $id_doc : ist das aktuelle dokument, welches nicht noch einmal geholt werden soll
	 */
	function get_doc($id_doc=-1) {
		echo $id_doc;
		$data = array(
			'id_doc'     => '',
			'name'       => '',
			'pdf'        => '',
			'mime_type'  => '',
			'id_doctype' => '',
			'id_car'     => '',
		);
		
		$this->db->select('
			doc.id_doc,
			doc.name,
			doc.pdf,
			doc.mime_type,
			doc.id_doctype,
			doc.id_car
		');
		$this->db->from('doc');
		if ($id_doc != -1) {
			$this->db->where('doc.id_doc', $id_doc);
		}
		$this->db->where('doc.deleted', 0);
		$this->db->order_by('doc.id_doc asc');
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			$result = $query->row();
			
			$data['id_doc']     = $result->id_doc;
			$data['name']       = $result->name;
			$data['pdf']        = $result->pdf;
			$data['mime_type']  = $result->mime_type;
			$data['id_doctype'] = $result->id_doctype;
			$data['id_car']     = $result->id_car;
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
	
	function set_car($id_doc, $id_car) {
		$data = array(
			'id_car' => $id_car,
		);
		
		$this->db->where('id_doc', $id_doc);
		$this->db->update('doc', $data); 
	}
	
	/*
	 * holt alle docs bist auf das übergebene
	 * @param $id_doc : id des Dokumentes, welches nicht geholt werden soll
	 * @return $id_doc
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
		$this->db->where('(doc.id_car IS NULL OR doc.id_doctype IS NULL)');
		$this->db->order_by('doc.id_doc asc');
		$query = $this->db->get();
		
		if ($query->num_rows() > 0 AND $id_doc != -1) {
			$result = $query->row();
			
			$data = $result->id_doc;
		}
		
		return $data;
	}
}





























