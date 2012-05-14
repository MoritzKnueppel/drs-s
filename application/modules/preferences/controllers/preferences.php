<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preferences extends CI_Controller {

	public function index()
	{
    $data['text'] = "Ich bin das Preferences Modul";
    $data['view'] = 'preferences_view';
    $this->load->view('container', $data);
	}
}

