<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Car extends CI_Controller {

public function index()
{
//  Erstmal nur eine Übersicht erzeugen, von der es auf die anderen Funktionen weiterführt
//  Wahrscheinlich kommen hier mal Auzählungen oder Gliederungen rein sowie ein Suchfeld ein
//  $data['quantity']   =   $this->car_model->car_count_all();
//  $data['title']      =   'Fahrzeuge/Vorg&auml;nge' 
    $data['text']       =   "Ich bin das CAR Modul";
    $data['view']       =   'car_view';
    $this->load->view('container', $data);
//  View mit Nennung der Einträge. Klick auf Eintragsmenge führt zu car/car_list('quantity')
}

public function cars_list($group)
{
    //  $data['cars']   =   $this->car_model->cars_get_by($group);   
    //  Fahrzeugdaten über container im car_list_view ausgeben   
    // ausgegebene Fahrgestellnummer oder Kennzeichen verlinkt zu car_detail/$id
}

public function car_detail($id)
{
    //  $data['car']        =   $this->car_model->cars_get_detail($id);
    //  $data['insurance']  =   $this->car_model->insurance_by_car($id);   Versicherungsdaten zu dem Fahrzeug
    //  $data['client']     =   $this->car_model->client_by_car($id);    Kundenname, Plz, Ort, zu dem Fahrzeug
    //  $data['docs']       =   $this->car_model->docs_by_car($id); Alle Dokumente zu dem Fahrzeug, group by 'group'   
    //  Fahrzeugdaten über container im car_detail_view ausgeben 
    //  Dokumentennamen sind im View Hyperlinks zu 'inbox/doc_detail($id)
    //  Stammdaten bekommen im View einen edit-icon, der zu stammdaten/edit führt    
}

} // END CONTROLLER car.php