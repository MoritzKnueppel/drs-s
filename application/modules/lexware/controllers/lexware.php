<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lexware extends CI_Controller {

		public function index()
	{
    $data['text'] = "Ich bin das lexware Modul";
		$this->load->view('lexware_view', $data);
	}
}

