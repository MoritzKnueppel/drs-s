<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoice extends CI_Controller 
{
public function __construct()
       {
            parent::__construct();
            $this->load->model('invoice_model');
       }

public function index()
{
//  $data['car'] über invoice_model holen wo "billable = 1" und an view übergeben   
//  $data['invoices'] über invoice_model holen, wo "timestamp = Heute"
    $data['title'] = "Start Ausgangsrechnung";
//  View invoice_view in container öffen    (Fahrzeuge auflisten und zu invoive_new verlinken sowie zu car/car_detail() )
//                                          (Unten Fahrzeuge auflsiten zu denen heute Rechnung erstellt wurde und ebenso verlinken)
    $data['view'] = 'invoice_view';
    $this->load->view('container', $data);
}

public function invoice_new($id_car)
{
//  FORM VALIDATION
//  IF
    $data['client'] = $this->invoice_model->get_client('1');  
//  $data['insurance'] zum car über invoice_model holen und an view übergeben
//  $data['car'] zum car über invoice_model holen und an view übergeben
    $data['dummy']  = $this->invoice_model->dummy_array_invoice(); //erstmal damit entspannt View bauen. Später model-functionen erstellen
//  View invoice_form_view in container öffnen
//  ELSE
//  $this->input->post() im inbox_model in $data binden und in inoice-table schreiben
//  redirect index
}

public function invoice_show($id_invoice)
{
// mache es Dir einfach. Kopier das invoice_form_view zu einem edit-View und ersetze die Value-Werte

//  FORM VALIDATION       
//  IF
//  $data['client'] zum car über invoice_model holen und an view übergeben   
//  $data['invoice'] zum car über invoice_model holen und an view übergeben
//  View invoice_form_edit_view in container öffnen
//  ELSE
//  $this->input->post() im inbox_model in $data binden und where id=id invoice-zeile updaten
//  redirect index
}

public function invoice_print_insurance($id_invoice)
{
//  $data['invoice'] und $data['client'] holen und druckfähigen View einsetzen
//  View print_invoice_insurance_view als Pop_up OHNE container aufrufen   
}

public function invoice_print_client($id_invoice)
{
//  $data['invoice'] holen und druckfähihen View einsetzen
//  View print_invoice_insurance_view als Pop_up OHNE container aufrufen   
}

public function invoice_sb($id_invoice)
{
//  FORM VALIDATION
//  IF
//  $data['client'] zum car über invoice_model holen und an view übergeben   
//  $data['insurance'] zum car über invoice_model holen und an view übergeben
//  $data['car'] zum car über invoice_model holen und an view übergeben
//  View invoice_form_view in container öffnen
//  ELSE
//  $this->input->post() im inbox_model in $data binden und in inoice-table schreiben
//  redirect index 
}

}  //  END CONTROLLER invoice.php