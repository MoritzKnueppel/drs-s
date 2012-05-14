<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Creditnote extends CI_Controller {

	public function index()
	{
    $data['text'] = "Ich bin das Creditnote Modul";
    $data['view'] = 'creditnote_view';
    $this->load->view('container', $data);
	}
}

