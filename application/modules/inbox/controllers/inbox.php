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
				
				$data['succes'] = 'Wurde gespeichert und nächstes Dokument geöffnet';
			}

		case 'next':
			//holt alle anderen docs 
			$id_doc = $this->Inbox_model->get_next_doc($id_doc);
	}
	
	
	$data['doctype'] = $this->Inbox_model->get_doctype();
	$data['car']     = $this->Inbox_model->get_all_car();
	$data['doc']     = $this->Inbox_model->get_doc($id_doc);
	
	$this->load->view('docs_open', $data);
}   

public function myFunction() {
	
}
	
public function docs_sorter($id){	
	$this->load->view('docs_sorter', $data);        
}
    
public function invoice_collector($id){
	echo "test";
}

}  // END CONTROLLER  inbox.php