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
                    'insurance'             => 'Generali',
                    'average_number'        => 'AB1234C5678910',
                    'repair_date'           => '08.06.2012',
                    'car_model'             => 'VW Golf 4',
                    'registration_number'   => 'GE-AB123',
                    'net'                   => '1000',
                    'tax'                   => '190',
                    'gross'                 => '1190',
                    'vin'                   => 'A109BC87654321',
                    'id_client'             => '1'
                    );
    return $data;
}

}  // END MODEL invoice_model.php
?>