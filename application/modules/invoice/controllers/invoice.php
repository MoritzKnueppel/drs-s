<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoice extends CI_Controller {

public function index()
{
//  $data['car'] �ber invoice_model holen wo billable = 1 und an view �bergeben   
//  $data['invoices'] �ber invoice_model holen, wo timestamp = Heute
    $data['text'] = "Ich bin das Invoice Modul";
//  View invoice_view in container �ffen    (Fahrzeuge auflisten und zu invoive_new verlinken sowie zu car/car_detail() )
//                                          (Unten Fahrzeuge auflsiten zu denen heute Rechnung erstellt wurde und ebenso verlinken)
    $data['view'] = 'invoice_view';
    $this->load->view('container', $data);
}

public function invoice_new($id_car)
{
//  FORM VALIDATION
//  IF
//  $data['client'] zum car �ber invoice_model holen und an view �bergeben   
//  $data['insurance'] zum car �ber invoice_model holen und an view �bergeben
//  $data['car'] zum car �ber invoice_model holen und an view �bergeben
//  View invoice_form_view in container �ffnen
//  ELSE
//  $this->input->post() im inbox_model in $data binden und in inoice-table schreiben
//  redirect index
}

public function invoice_show($id_invoice)
{
//  $data['invoice'] holen und in Formular wie invoice_new aufrufen
}

public function invoice_print_insurance($id_invoice)
{
//  $data['invoice'] holen und druckf�hihen View einsetzen
//  View print_invoice_insurance_view als Pop_up OHNE container aufrufen   
}

public function invoice_print_client($id_invoice)
{
//  $data['invoice'] holen und druckf�hihen View einsetzen
//  View print_invoice_insurance_view als Pop_up OHNE container aufrufen   
}

public function invoice_sb($id_invoice)
{
//  FORM VALIDATION
//  IF
//  $data['client'] zum car �ber invoice_model holen und an view �bergeben   
//  $data['insurance'] zum car �ber invoice_model holen und an view �bergeben
//  $data['car'] zum car �ber invoice_model holen und an view �bergeben
//  View invoice_form_view in container �ffnen
//  ELSE
//  $this->input->post() im inbox_model in $data binden und in inoice-table schreiben
//  redirect index 
}

}  //  END CONTROLLER invoice.php