<!-- Den Text hier drüber kann man löschen. ist nur für Dich zur Info -->

<!-- form_open-->
<!-- form_hidden-->
<!-- Div Bereich Kontaktdaten-->
<!-- Div Bereich "allgemeine" Rechnungsdaten -->
<!-- Div Bereich Leistungszeilen 18 Stk. Standard -->
<!-- Div Bereich Netto USt Brutto-->
<!-- Button & form_close-->

<h3>Gutschrift</h3>
<?=form_open('gutschrift/send');?>

    
   
    
    
<div class="row">
  <div class="span12">
    <div class="row">
      <div class="span6"><div class="row">
	<div class="span2">Empf&auml;nger</div>
	<div class="span1"> 
<?=form_input('username');?>
	</div>
    </div></div>
      <div class="span6"> <div class="row">
	<div class="span2">Versicherung</div>
	<div class="span1"> 
<?=form_input('username');?>
	</div>
    </div></div>
    </div>
  </div>
</div>
<div class="row">
  <div class="span12">
    <div class="row">
      <div class="span6"><div class="row">
	<div class="span2">Stra&szlig;e</div>
	<div class="span1"> 
<?=form_input('username');?>
	</div>
    </div></div>
      <div class="span6"> <div class="row">
	<div class="span2">Ort</div>
	<div class="span1"> 
<?=form_input('username');?>
	</div>
    </div></div>
    </div>
  </div>
</div>
<div class="row">
  <div class="span12">
    <div class="row">
      <div class="span6"><div class="row">
	<div class="span2">Ort</div>
	<div class="span1"> 
<?=form_input('username');?>
	</div>
    </div></div>
      <div class="span6"> <div class="row">
	<div class="span2">Anrede</div>
	<div class="span1"> 
<?= form_dropdown(); ?>
	</div>
    </div></div>
    </div>
  </div>
</div>   
    <br>
<div class="container">    
<table class="table table-bordered"> 
     <tbody>
    <tr>
      <td>Unser zeichen</td>
      <td>Kunden-Nr:</td>
      <td>Rechnungsdatum:</td>
          </tr>
                <td>MP</td>
      <td>123456</td>
      <td>01.01.2012</td>
  </tbody>
</table>
</div>

<table class="table table-bordered"> 
     <tbody>
    <tr>
      <td>Pos</td>
      <td>Bemekung</td>
      <td>Rabatt</td>
      <td>Summe</td>
          </tr>
          <tr>
      <td>1</td>
      <td>...</td>
      <td>15%</td>
      <td>123</td>
      </tr>
      <td>2</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      </tr>
      <tr>
      <td class = "span1"></td>
      <td colspan = "2"></td>
      <td>Nettobetrag EUR</td>
      <td>123,45</td>       
      </tr>
      <td>x</td>
      <td colspan = "2"></td>
      <td>19 % Mwst</td>
      <td>23,46</td>
      </tr>
      <tr>
      <td>x</td>
      <td colspan = "2"></td>
      <td>Gesamtbetrag EUR</td>
      <td>146,91</td>       
      </tr>
  </tbody>
</table>




<!-- <?=form_input('title',isset($data) ? $data['title'] : set_value('title'));?> //-->


<!-- <?=form_button('save','Speichern');?>
<?=form_button('abort','Abbrechen');?>
<?=form_close();?> //-->
