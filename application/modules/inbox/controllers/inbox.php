<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inbox extends CI_Controller {

	public function index()
	{
    $data['text'] = "Ich bin das Inbox Modul";
		$this->load->view('inbox_view', $data);
	}
}

