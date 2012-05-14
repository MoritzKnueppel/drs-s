<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Basicdata extends CI_Controller {


	public function index()
	{
    $data['text'] = "Ich bin das BASICDATA Modul";
    $data['view'] = 'basicdata_view';
    $this->load->view('container', $data);
	}
}