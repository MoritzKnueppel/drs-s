<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Car extends CI_Controller {

public function index()
{
//  Erstmal nur eine �bersicht erzeugen, von der es auf die anderen Funktionen weiterf�hrt
//  Wahrscheinlich kommen hier mal Auz�hlungen oder Gliederungen rein sowie ein Suchfeld ein
//  $data['quantity']   =   $this->car_model->car_count_all();
//  $data['title']      =   'Fahrzeuge/Vorg&auml;nge' 
    $data['text']       =   "Ich bin das CAR Modul";
    $data['view']       =   'car_view';
    $this->load->view('container', $data);
//  View mit Nennung der Eintr�ge. Klick auf Eintragsmenge f�hrt zu car/car_list('quantity')
}

public function cars_list($group)
{
    //  $data['cars']   =   $this->car_model->cars_get_by($group);   
    //  Fahrzeugdaten �ber container im car_list_view ausgeben   
}

} // END CONTROLLER car.php