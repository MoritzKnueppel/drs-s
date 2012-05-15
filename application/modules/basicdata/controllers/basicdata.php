<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Basicdata extends CI_Controller {


	public function index()
	{
    $data['text'] = "Ich bin das BASICDATA Modul";
    $data['view'] = 'basicdata_view';
    $this->load->view('container', $data);         
	}
   
//function blog beispielhaft , am Ende bitte entfernen
  function blog() 
  {
    //$this->load->library('grocery_crud');
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

// Für die folgenden Stammdaten die jeweilige Tabelle ansprechen. Überschriften überstzen. ID nicht zeigen.
// Löschen darf nicht zulässig sein. Delete darf gesetzt werden. Zeilen mit delete=1 dürfen nicht angezeigt werden.

function client() 
  {

    $this->grocery_crud->set_theme('datatables');
    $this->grocery_crud->unset_delete();
    //$this->grocery_crud->unset_edit(); 
    $this->grocery_crud->unset_columns('deleted');
    
    //translation of field titles
    $this->grocery_crud->display_as('first_name', 'Vorname');
    $this->grocery_crud->display_as('street', 'Straße und Hausnummer');
    $this->grocery_crud->display_as('zip', 'PLZ');
    $this->grocery_crud->display_as('city', 'Stadt');
    $this->grocery_crud->display_as('country', 'Land');
    $this->grocery_crud->display_as('last_name', 'Nachname');
    //end
    
    $this->grocery_crud->where('deleted', 'inactive');
    
    $output = $this->grocery_crud->render('client');
    $data['view']='basicdata_view'; 
    $data['grocery_stylesheet']=true; 
    $this->load->vars($data);
    $this->_example_output($output);
  }

function insurance() 
  {
    $this->grocery_crud->set_theme('datatables');
    $this->grocery_crud->unset_delete();
    //$this->grocery_crud->unset_edit(); 
    $this->grocery_crud->unset_columns('deleted');
    
    //translation of field titles
    $this->grocery_crud->display_as('name', 'Name');
    $this->grocery_crud->display_as('street', 'Straße und Hausnummer');
    $this->grocery_crud->display_as('zip', 'PLZ');
    $this->grocery_crud->display_as('city', 'Stadt');
    $this->grocery_crud->display_as('country', 'Land');
    //end
    
    $this->grocery_crud->where('deleted', 'inactive');
    
    $output = $this->grocery_crud->render('insurance');
    $data['view']='basicdata_view'; 
    $data['grocery_stylesheet']=true; 
    $this->load->vars($data);
    $this->_example_output($output);
  }
  
//folgende greifen alle auf subcontractor zu, unterscheiden in subcontractor_type

 function technician()
 {
    $this->grocery_crud->set_theme('datatables');
    $this->grocery_crud->unset_delete();
    //$this->grocery_crud->unset_edit(); 
    $this->grocery_crud->unset_columns('deleted');
    
    //translation of field titles
    $this->grocery_crud->display_as('name', 'Name');
    $this->grocery_crud->display_as('street', 'Straße und Hausnummer');
    $this->grocery_crud->display_as('zip', 'PLZ');
    $this->grocery_crud->display_as('city', 'Stadt');
    $this->grocery_crud->display_as('country', 'Land');
    $this->grocery_crud->display_as('company', 'Unternehmen');
    //end
    
    $this->grocery_crud->where('deleted', 'inactive');
    
    $output = $this->grocery_crud->render('station');
    $data['view']='basicdata_view'; 
    $data['grocery_stylesheet']=true; 
    $this->load->vars($data);
    $this->_example_output($output);
 } 
 
function supplier()
{
        
}
  
function monteur()
  {
  }

  function finisher(){}
  function painter() {}
  
  //   ende
  
  
function document_type() 
  {
  
  }

function station() 
  {
    $this->grocery_crud->set_theme('datatables');
    $this->grocery_crud->unset_delete();
    //$this->grocery_crud->unset_edit(); 
    $this->grocery_crud->unset_columns('deleted');
    
    //translation of field titles
    $this->grocery_crud->display_as('name', 'Name');
    $this->grocery_crud->display_as('street', 'Straße und Hausnummer');
    $this->grocery_crud->display_as('zip', 'PLZ');
    $this->grocery_crud->display_as('city', 'Stadt');
    $this->grocery_crud->display_as('country', 'Land');
    $this->grocery_crud->display_as('company', 'Unternehmen');
    //end
    
    $this->grocery_crud->where('deleted', 'inactive');
    
    $output = $this->grocery_crud->render('station');
    $data['view']='basicdata_view'; 
    $data['grocery_stylesheet']=true; 
    $this->load->vars($data);
    $this->_example_output($output);
  }

function _example_output($output= null)
    {
        $this->load->view('container', $output);
    }

    

} // END OF basicdata.php