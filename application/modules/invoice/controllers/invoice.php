<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoice extends CI_Controller {

	public function index()
	{
    $data['text'] = "Ich bin das Invoice Modul";
      $data['view'] = 'invoice_view';
    $this->load->view('container', $data);
	}
}

