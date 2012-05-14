<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoice extends CI_Controller {

	public function index()
	{
    $data['text'] = "Ich bin das Invoice Modul";
		$this->load->view('invoice_view', $data);
	}
}

