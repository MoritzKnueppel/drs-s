<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Car extends CI_Controller {

	public function index()
	{
    $data['text'] = "Ich bin das CAR Modul";
		$this->load->view('car_view', $data);
	}
}