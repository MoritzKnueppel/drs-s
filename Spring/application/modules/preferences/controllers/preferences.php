<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preferences extends CI_Controller {

	public function index()
	{
//  Die unterschiedlichen Einstellungen werden jeweils als einzelne Zeilen in der preferences Tabelle aufgeführt.
//  Alle Zeilen vom preferences_model aus preferences abholen lassen und ans preferences view per $data['preferences'] übergeben
//  View in Container laden
// ##
// im view auflisten, jeweils mit bootstrap-edit-icon in der zeile. edit verweist auf preferences_edit/$id_preferences
    $data['text'] = "Ich bin das Preferences Modul";
    $data['view'] = 'preferences_view';
    $this->load->view('container', $data);
	}

    public function preferences_edit($id)
    {
//  Form Validation für preferences - Text und Value required 
//  if false: Einzelne Zeile zur $id über preferences_model aus preferences holen und per $data an View geben
//            Formular preferences_form in container laden
//  if true:  Post-Daten über preferences_model mit $this->input->post() in $data binden und tabelle updaten
//            refirect index
    }
    
    public function preferences_new()
    {
//  Form Validation für preferences - Text und Value required 
//  if false: Formular preferences_form in container laden
//  if true:  Post-Daten über preferences_model mit $this->input->post() in $data binden und in tabelle eintragen
    }    

} // END CONTROLLER preferences.php

