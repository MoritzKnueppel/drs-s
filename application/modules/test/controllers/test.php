<?php
    

class Test extends CI_Controller
{

function blog()
{
   
    $this->load->library('grocery_crud');
    $this->grocery_crud->set_theme('datatables');
    $this->grocery_crud->unset_delete();
    $this->grocery_crud->unset_edit(); 
    $this->grocery_crud->set_theme('datatables');
    $this->grocery_crud->unset_columns('deleted');
    $this->grocery_crud->display_as('content', 'Inhalt');
    $output = $this->grocery_crud->render('blog');
    $this->_example_output($output);
    
}    
    function _example_output($output= null)
    {
        $this->load->view('test_view', $output);
    }
}

?>   