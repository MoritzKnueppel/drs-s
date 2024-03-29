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

// F�r die folgenden Stammdaten die jeweilige Tabelle ansprechen. �berschriften �berstzen. ID nicht zeigen.
// L�schen darf nicht zul�ssig sein. Delete darf gesetzt werden. Zeilen mit delete=1 d�rfen nicht angezeigt werden.

function client() 
  {

    $this->grocery_crud->set_theme('datatables');
    $this->grocery_crud->unset_delete();
    //$this->grocery_crud->unset_edit(); 
    $this->grocery_crud->unset_columns('deleted');
    
    //translation of field titles
    $this->grocery_crud->display_as('first_name', 'Vorname');
    $this->grocery_crud->display_as('street', 'Stra�e und Hausnummer');
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
    $this->grocery_crud->display_as('street', 'Stra�e und Hausnummer');
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
  

function subcontractor($id_subcon)

 {
    $this->grocery_crud->set_theme('datatables');
    $this->grocery_crud->unset_delete();
    //$this->grocery_crud->unset_edit(); 
    $this->grocery_crud->unset_columns('deleted');
    
    //translation of field titles
    $this->grocery_crud->display_as('name', 'Name');
    $this->grocery_crud->display_as('street', 'Stra�e und Hausnummer');
    $this->grocery_crud->display_as('zip', 'PLZ');
    $this->grocery_crud->display_as('city', 'Stadt');
    $this->grocery_crud->display_as('country', 'Land');
    $this->grocery_crud->display_as('company', 'Unternehmen');
    //end
    
    $this->grocery_crud->where('deleted', 'inactive');
    $this->grocery_crud->where('id_subcon_type', $id_subcon);
    
    $output = $this->grocery_crud->render('subcontractor');
    $data['view']='basicdata_view'; 
    $data['grocery_stylesheet']=true; 
    $this->load->vars($data);
    $this->_example_output($output);
 } 

  
function doctype() 
  {
    $this->grocery_crud->set_theme('datatables');
    $this->grocery_crud->unset_delete();
    //$this->grocery_crud->unset_edit(); 
    $this->grocery_crud->unset_columns('deleted');
    
    //translation of field titles
/* <<<<<<< HEAD */
    $this->grocery_crud->display_as('group', 'Gruppe');
    $this->grocery_crud->display_as('name', 'Name');
     //end
    
    $this->grocery_crud->where('deleted', 'inactive');
    
/* ======= */
    $this->grocery_crud->display_as('name', 'Name');
    $this->grocery_crud->display_as('street', 'Stra�e und Hausnummer');
    $this->grocery_crud->display_as('zip', 'PLZ');
    $this->grocery_crud->display_as('city', 'Stadt');
    $this->grocery_crud->display_as('country', 'Land');
    $this->grocery_crud->display_as('company', 'Unternehmen');
    //end
    
    $this->grocery_crud->where('deleted', 'inactive');
  
/* >>>>>>> 320c0f0b8e1e3680d5636b138d790922b1afc624 */
    $output = $this->grocery_crud->render('doctype');
    $data['view']='basicdata_view'; 
    $data['grocery_stylesheet']=true; 
    $this->load->vars($data);
/* <<<<<<< HEAD */
    $this->_example_output($output);
/* ======= */
    $this->_example_output($output);  
/* >>>>>>> 320c0f0b8e1e3680d5636b138d790922b1afc624 */
  }

function station() 
  {
    $this->grocery_crud->set_theme('datatables');
    $this->grocery_crud->unset_delete();
    //$this->grocery_crud->unset_edit(); 
    $this->grocery_crud->unset_columns('deleted');
    
    //translation of field titles
    $this->grocery_crud->display_as('name', 'Name');
    $this->grocery_crud->display_as('street', 'Stra�e und Hausnummer');
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