<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

public function index()
{
//  FORM VALIDATION
    $data['text'] = "Ich bin das Search Modul";
    $data['view'] = 'search_view';
    $this->load->view('container', $data);
}

public function search_result($key)
{
//  FORM VALIDATION
//  IF FALSE
//  sucht �ber search_model in car.VIN, car.registration_number subcontractor.last_name und client.last_name nach ALIKE nach $key 
//  gibt Suchergebnis in $data an View (dort Auflistung plus (zuerst) leeres Suchfeld)
//  auch $data['key'] �bergeben
//  search_result_view in container aufrufen
//  wenn ARRAY leer in View ankommt Ausgabe "Sorry, kein Suchergebnis f�r $key" o.�.   
//  ELSE
//  sucht �ber search_model in car.VIN, car.registration_number subcontractor.last_name und client.last_name nach ALIKE nach $key 
//  gibt Suchergebnis in $data an View (dort Auflistung plus (zuerst) leeres Suchfeld)
//  auch $data['key'] �bergeben
//  search_result_view in container aufrufen
//  wenn ARRAY leer in View ankommt Ausgabe "Sorry, kein Suchergebnis f�r $key" o.�.   
}

} // END CONTROLLER search.php

