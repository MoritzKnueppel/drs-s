<?php
class Creditnote_model extends CI_Model 
{

function __construct()
{
    parent::__construct();
}

function get_station($id_station)
{
    $this->db->where('id_station', $id_station);
    $sql    =   $this->db->get('station');
    if($sql->num_row()>0) 
        {
            $data = $sql->row();
        }
    else 
        {   
            $data = NULL;
        } 
    return $data;
}

function dummy_array_creditnote()
{
    $data   =   array(  'employee'      =>  'MP',
                        'creditor'      =>  '70654',
                        'date'          =>  '14.06.2012',
                        'id_station'    =>  '1',
                        );
    return $data; 
}

} // END MODEL creditnote_model.php
