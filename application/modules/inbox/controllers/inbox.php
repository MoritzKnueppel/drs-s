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
	

	switch ($this->input->post('status')) {
		case 'save':
			break;
		case 'next':
		default:
			$id_doc = -1;
			
			if ($this->input->post('id_doc')) {
				$id_doc = $this->input->post('id_doc');
			};
			
			$data['doc'] = $this->Inbox_model->get_doc($id_doc);
			
			echo '<pre>';
				print_r($data['doc']);
			echo '</pre>';
			break;
	}
	
	
	
		
	
	$this->load->view('docs_open', $data);
}   
	
public function docs_sorter($id){	
	$this->load->view('docs_sorter', $data);        
}
    
public function invoice_collector($id){
	echo "test";
}

}  // END CONTROLLER  inbox.php