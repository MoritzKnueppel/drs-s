<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inbox extends CI_Controller {

public function __construct() {
	parent::__construct();
	
	$this->load->model('Inbox_model', null, true);
}

public function index(){
    $data['text'] = "Ich bin das Inbox Modul";
    $data['view'] = 'inbox_view';
    $this->load->view('container', $data);
}

/* 
 * sorts the documents
 */
public function docs_open(){
	
	// der defaultwert für das anzuzeigende Dokument
	if ($this->input->post('id_doc')) {
		$id_doc = $this->input->post('id_doc');
	}else {
		$id_doc = -1;
	}
	
	
	switch ($this->input->post('status')) {
		case 'save':
			$id_doc     = $this->input->post('id_doc');
			$id_doctype = $this->input->post('id_doctype');
			$id_car     = $this->input->post('id_car');
			
			$this->form_validation->set_rules('id_doctype', 'id_doctype', 'required');
			$this->form_validation->set_rules('id_car',     'id_car',     'required');
			
			if ($this->form_validation->run() == TRUE) {
				$this->Inbox_model->set_doc($id_doc, $id_doctype);
				$this->Inbox_model->set_car($id_doc, $id_car);
				
				$data['succes'] = 'Wurde gespeichert und n&auml;chstes Dokument ge&ouml;ffnet';
				
				/*
				 * Wenn es ein Gutachten oder eine Kostenübernahme ist
				 * wird ein weiteres Formular angezeigt
				 */
				if ($id_doctype == '10' OR $id_doctype == '1') {
					redirect('/Inbox/create_car/'.$id_doc, 'refresh');
				}
				
				/*
				 * Wenn es eine Rechung ist
				 * wird ein weiteres Formular angezeigt
				 */
				if ($id_doctype == '2' OR $id_doctype == '3' OR $id_doctype == '4') {
					redirect('/Inbox/create_car/'.$id_doc, 'refresh');
				}
			}

		case 'next':
			//holt alle anderen docs 
			$id_doc = $this->Inbox_model->get_next_doc($id_doc);
	}
	
	$data['doctype'] = $this->Inbox_model->get_doctype();
	$data['all_car'] = $this->Inbox_model->get_all_car();
	$data['doc']     = $this->Inbox_model->get_doc($id_doc);
	

	
	$this->load->view('docs_open', $data);
}   

/*
 * Erstellt das Auto anhand des Gutachtens
 */
public function create_car($id_doc) {

	$this->form_validation->set_rules('registration_number', 'registration_number', 'required');
	$this->form_validation->set_rules('first_name',          'first_name',          'required');
	$this->form_validation->set_rules('last_name',           'last_name',           'required');
	$this->form_validation->set_rules('street',              'street',              'required');
	$this->form_validation->set_rules('city',                'city',                'required');
	$this->form_validation->set_rules('company',             'company',             'required');
	$this->form_validation->set_rules('vin',                 'vin',                 'required');
	$this->form_validation->set_rules('zip',                 'zip',                 'required|numeric');
	
	
	if ($this->form_validation->run() == TRUE) {
		$data['id_car'] = $this->Inbox_model->set_car_client($id_doc, $this->input->post());
		
		$data['succes'] = 'Wurde gespeichert';
		
		redirect('/Inbox/docs_open/'.$id_doc, 'refresh');
	}
	
	$data['id_doc'] = $id_doc;
	$data['doc'] = $this->Inbox_model->get_doc($id_doc);
			
	$this->load->view('create_car', $data);
}

public function sort_bill_car($id_doc) {
	$data['id_doc'] = $id_doc;
	$data['doc'] = $this->Inbox_model->get_doc($id_doc);
	
	
	
	$this->load->view('sort_bill_car', $data);
}
	
public function docs_sorter($id){	
	$this->load->view('docs_sorter', $data);        
}
    
public function invoice_collector($id){
	echo "test";
}
















}  // END CONTROLLER  inbox.php