<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
    $data['text'] = "Ich bin das Search Modul";
    $data['view'] = 'search_view';
    $this->load->view('container', $data);
	}
}

