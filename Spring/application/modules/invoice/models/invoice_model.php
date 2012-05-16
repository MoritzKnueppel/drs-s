<?php
class Invoice_model extends CI_Model 
{

function __construct()
{
    parent::__construct();
}

function dummy_array_invoice()
{
    $data = array(  'employee'              => 'MP',
                    'debitor'               => '10567',
                    'date'                  => '11.06.2012',
                    'name'                 =>  'Max Mustermann',
                    'insurance'             => 'Generali',
                    'average_number'        => 'AB1234C5678910',
                    'repair_date'           => '08.06.2012',
                    'car_model'             => 'VW Golf 4',
                    'registration_number'   => 'GE-AB123',
                    'distance'              => '54.321',
                    'net'                   => '1000',
                    'tax'                   => '190',
                    'gross'                 => '1190',
                    'vin'                   => 'A109BC87654321',
                    'id_client'             => '1',
                    'invoicelines[0]'        =>  array(
                                                        'pos'       =>  '1',
                                                        'text'      =>  'Motorhaube',
                                                        'dent'      =>  '12',
                                                        'size'      =>  '10',
                                                        'pre'       =>  '',
                                                        'alu'       =>  '',
                                                        'aw_dol'    =>  '14',
                                                        'aw_ae'     =>  '5',
                                                        'note'      =>  '',
                                                        'aw_sum'    =>  '19'),
                  'invoicelines[1]'       =>  array(
                                                        'pos'       =>  '2',
                                                        'text'      =>  'Dach',
                                                        'dent'      =>  '8',
                                                        'size'      =>  '10',
                                                        'pre'       =>  '',
                                                        'alu'       =>  '',
                                                        'aw_dol'    =>  '10',
                                                        'aw_ae'     =>  '20',
                                                        'note'      =>  '',
                                                        'aw_sum'    =>  '30'),
                    );  
                    
    return $data;
}

function get_client($id_client)
{
    $this->db->where('id_client', $id_client);
    $sql    =   $this->db->get('client');
    if($sql->num_rows()>0) 
        {
            $data = $sql->row();
        }
    else 
        {   
            $data = NULL;
        } 
    return $data;
}
}  // END MODEL invoice_model.php
?>