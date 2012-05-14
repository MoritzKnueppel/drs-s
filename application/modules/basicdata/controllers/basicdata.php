<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Basicdata extends CI_Controller {


	public function index()
	{
    $data['text'] = "Ich bin das BASICDATA Modul";
    $data['view'] = 'basicdata_view';
    $this->load->view('container', $data);
	}
  
  
  function blog() {
  $this->load->library('grocery_crud');
    $this->grocery_crud->set_theme('datatables');
    $this->grocery_crud->unset_delete();
    $this->grocery_crud->unset_edit(); 
    $this->grocery_crud->set_theme('datatables');
    $this->grocery_crud->unset_columns('deleted');
    $this->grocery_crud->display_as('content', 'Inhalt');
    $output = $this->grocery_crud->render('blog');
    $data['view']='basicdata_view'; 
    $data['grocery_stylesheet']=true; 
    $this->load->vars($data);
         
    $this->_example_output($output);
  }
  
  function insorance() 
  {
  
  }
  function subcontractor() 
  {
  
  }
  function subcontractor_type()
  {
  
  }
  function document_type() 
  {
  
  }
  function station() 
  {
  
  }
  function _example_output($output= null)
    {

       
        $this->load->view('container', $output);
    }
}