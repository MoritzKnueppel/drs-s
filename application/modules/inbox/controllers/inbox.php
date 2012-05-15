<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inbox extends CI_Controller {

public function index()
	{
//  $data['docs_unsort']    =   $this->inbox_model->docs_unsort_count();  Menge Dokumente ohne Eintrag bei Typ
//  $data['docs_uncleared'] =   $this->inbox_model->docs_uncleared();  menge Dokumente ohne Eintrag Case/Car
//  $data['invoices']       =   $this->inbox_model->invoices_uncleared(); Menge Docs Typ Invoice ohne Aufteilung
//  $data an Inbox_view geben.  Menge linkt ebenso wie ein anchor daneben auf Detailliste docs_open/$group
    $data['text'] = "Ich bin das Inbox Modul";
    $data['view'] = 'inbox_view';
    $this->load->view('container', $data);
	}

public function docs_open($group)
    {
        echo "test";
    }   

public function docs_sorter($id)
    {
        echo "test";        
    }
    
public function invoice_collector($id)
    {
        echo "test";
    }

}  // END CONTROLLER  inbox.php