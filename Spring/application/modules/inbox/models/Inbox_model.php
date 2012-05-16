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
			'-1' => 'unknown',
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
			'-1' => 'unknown',
		);
		
		$this->db->select('
			car.id_car,
			car.registration_number,
			car.vin
		');
		$this->db->from('car');
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			
			foreach ($query->result() as $item) {
				$data[$item->id_car] = isset($item->registration_number) ? $item->registration_number : $item->vin ;
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
		}else {
			$this->db->where('(doc.id_car IS NULL OR doc.id_doctype IS NULL)');
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
			$data['id_doctype'] = ($result->id_doctype) ? $result->id_doctype : '-1';
			$data['id_car']     = ($result->id_car)     ? $result->id_car     : '-1';
		}
		
		return $data;
	}
	
	function set_doc($id_doc, $id_doctype) {
		$data = array(
			'id_doctype' => $id_doctype,
		);
		
		if ($id_doctype == -1) {
			$data['id_doctype'] = NULL;
		}
		
		$this->db->where('id_doc', $id_doc);
		$this->db->update('doc', $data); 
	}
	
	function set_car($id_doc, $id_car) {
		$data = array(
			'id_car' => $id_car,
		);
		
		if ($id_car == -1) {
			$data['id_car'] = NULL;
		}
		
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
	
	function get_car_client($id_car) {
		$data = array(
			'registration_number' => '',
			'first_name'          => '',
			'last_name'           => '',
			'street'              => '',
			'city'                => '',
			'company'             => '',
			'vin'                 => '',
			'zip'                 => '',
		);
		
		$this->db->select('
			car.registration_number,
			car.vin,
			client.first_name,
			client.last_name,
			client.street,
			client.city,
			client.company,
			client.zip,
		');
		$this->db->from('car');
		$this->db->join('client','client.id_client = car.id_client','left');
		$this->db->where('car.id_car', $id_car);
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			$result = $query->row();
			
			$data['registration_number'] = $result->registration_number;
			$data['first_name']          = $result->first_name;
			$data['last_name']           = $result->last_name;
			$data['street']              = $result->street;
			$data['city']                = $result->city;
			$data['company']             = $result->company;
			$data['vin']                 = $result->vin;
			$data['zip']                 = $result->zip;
		}
		
		return $data;
	}
	
	function set_car_client($id_doc, $car_data) {
		$data_client = array(
			'first_name'          => $car_data['first_name'],
			'last_name'           => $car_data['last_name'],
			'street'              => $car_data['street'],
			'city'                => $car_data['city'],
			'company'             => $car_data['company'],
			'zip'                 => $car_data['zip'],
		);
		$this->db->insert('client', $data_client); 
		$id_client = $this->db->insert_id();
		
		$data_car = array(
			'registration_number' => $car_data['registration_number'],
			'vin'                 => $car_data['vin'],
			'id_client'           => $id_client,
		);
		$this->db->insert('car', $data_car); 
		$id_car = $this->db->insert_id();
		
		$data_doc = array(
			'id_car'              => $id_car,
		);
		$this->db->where('id_doc', $id_doc);
		$this->db->update('doc', $data_doc); 
		
		return $id_car;
	}		
	
	function get_all_subcontractors() {
		$data = array(
			'-1' => 'unknown',
		);
		
		$this->db->select('
			subcontractor.id_subcontractor,
			subcontractor.first_name,
			subcontractor.last_name,
		');
		$this->db->from('subcontractor');
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			
			foreach ($query->result() as $item) {
				$data[$item->id_subcontractor] = $item->first_name.' '.$item->last_name ;
			}
			
		}
		
		return $data;
	}
	
	function set_subcontractor_car($id_doc, $input_data) {
		$data = array( /*
			'id_car'           => '',
			'id_subcontractor' => '', */
		);

		
		foreach ($input_data['sort'] as $item) {
			if ($item['id_car'] != '-1' OR $item['bill'] != '') {
				$data_bill['id_car']           = ($item['id_car'] != '-1') ? $item['id_car'] : NULL;
				$data_bill['bill']             = $item['bill'];
				$data_bill['id_doc']           = $id_doc;
				$data_bill['id_subcontractor'] = ($input_data['id_subcontractor'] != '-1') ?$input_data['id_subcontractor'] : NULL;
				
				$this->db->insert('bill', $data_bill);
				
			}

		}

	}

}





























