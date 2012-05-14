<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Creditnote extends CI_Controller {

	public function index()
	{
    $data['text'] = "Ich bin das Creditnote Modul";
		$this->load->view('creditnote_view', $data);
	}
}

