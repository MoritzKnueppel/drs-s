<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Car extends CI_Controller {

	public function index()
	{
    $data['text'] = "Ich bin das CAR Modul";
		$data['view'] = 'car_view';
    $this->load->view('container', $data);
	}
}