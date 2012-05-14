<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fibuhome extends CI_Controller {

	public function index()
	{
    $data['text'] = "Ich bin das Fibuhome Modul";
		$this->load->view('fibuhome_view', $data);
	}
}

