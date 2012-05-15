<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Creditnote extends CI_Controller 
{
public function __construct()
       {
            parent::__construct();
            $this->load->model('creditnote_model');
       }

public function index()
	{
    $data['title'] = "Start Gutschriften";
    $data['view'] = 'creditnote_view';
    $this->load->view('container', $data);
	}

public function creditnote_new()
{
    $data['creditnote'] =   $this->creditnote_model->dummy_array_creditnote();
    $data['station']    =   $this->creditnote_model->station_get('1');
    $data['title']      =   "Neue Gutschrift";
    $data['view']       =   "creditnote_form_view";
    $this->load->view('container', $data);
}

}   // END CONTROLLER creditnote.php