<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inbox extends CI_Controller {

	public function index()
	{
    $data['text'] = "Ich bin das Inbox Modul";
        $data['view'] = 'inbox_view';
    $this->load->view('container', $data);
	}
}

