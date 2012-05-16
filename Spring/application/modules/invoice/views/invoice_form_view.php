
<!-- Den Text hier drüber kann man löschen. ist nur für Dich zur Info -->
<!-- Headline -->
<!-- form_open-->
<!-- form_hidden-->
<!-- Div Bereich Kontaktdaten-->
<!-- Div Bereich "allgemeine" Rechnungsdaten -->
<!-- Div Bereich Leistungszeilen 18 Stk. Standard -->
<!-- Div Bereich Netto USt Brutto-->
<!-- Button & form_close-->


<h1>Rechnung</h1>
<br>

<?=form_open();?>


    <div class="row">
        <div class="span1">
            Empfänger
        </div>
        <div class="span4">
            <input type="input" name="recevier" />   
        </div>
        
        <div class="span1">
            Versicherung
        </div>
        <div class="span4">
            <input type="input" name="insurance" />
        </div>
    </div>
<br>    
    <div class="row">
        <div class="span1">
            Straße
        </div>
        <div class="span4">
            <input type="input" name="street" />   
        </div>
        
        <div class="span1">
            Ort
        </div>
        <div class="span4">
            <input type="input" name="insurance_city" />
        </div>
    </div>
<br>    
    <div class="row">
        <div class="span1">
            Ort
        </div>
        <div class="span4">
            <input type="input" name="receiver_city" />   
        </div>
        
        <div class="span1">
            Anrede
        </div>
        <div class="span4">
            <select>
                <option>Sehr geehrter Herr</option>
                <option>Sehr geehrte Frau</option>
            </select>
        </div>
    </div> 
  
<br>
<br>
 
<!-- die erste tabelle--> 
  
<div class="row">
  <div class="span4">
    <h4>Unser Zeichen:</h4>
  </div>
  
  <div class="span4 offset 4">
    <h4>Kunden-Nr.:</h4>
  </div>
  
  <div class="span4 offset 8">
    <h4>Rechnungsdatum:</h4>
  </div>
</div>

<div class="row">
  <div class="span4">
    <?=$infos['employee'];?>
  </div>
  
  <div class="span4 offset 4">
    <?=$infos['debitor'];?>
  </div>
  
  <div class="span4 offset 8">
      <?=$infos['date'];?>
  </div>
</div>

<br>
<!-- die zweite tabelle--> 

<div class="row">
  <div class="span4">
    <h4>Versicherungsteilnehmer:</h4>
  </div>
  
  <div class="span4 offset 4">
    <h4>Versicherung:</h4>
  </div>
  
  <div class="span4 offset 8">
    <h4>Schadensnummer:</h4>
  </div>
  
  <div class="span4 offset 8">
    <h4>Leistungsdatum:</h4>
  </div>
  
</div>

<div class="row">
  <div class="span4">
    <?=$infos['name'];?>
  </div>
  
  <div class="span4 offset 4">
    <?=$infos['insurance'];?>
  </div>
  
   <div class="span4 offset 8">
      <?=$infos['average_number'];?>
  </div>
  
  <div class="span4 offset 8">
      <?=$infos['repair_date'];?>
  </div>
</div>

<br>

 <!-- die dritte tabelle--> 

 <div class="row">
  <div class="span4">
    <h4>Hersteller, Typ, Farbe:</h4>
  </div>
  
  <div class="span4 offset 4">
    <h4>FG-Nr.:</h4>
  </div>
  
  <div class="span4 offset 8">
    <h4>Kennzeichen:</h4>
  </div>
  
  <div class="span4 offset 8">
    <h4>km:</h4>
  </div>
  
</div>

<div class="row">
  <div class="span4">
    <?=$infos['car_model'];?>
  </div>
  
  <div class="span4 offset 4">
    <?=$infos['vin'];?>
  </div>
  
   <div class="span4 offset 8">
      <?=$infos['registration_number'];?>
  </div>
  
  <div class="span4 offset 8">
      <?=$infos['distance'];?>
  </div>
</div>


<br>
<br>


  <!-- die vierte tabelle--> 
 
 <div class="row">
  <div class="span2">
    <h4>Beschädigtes Bauteil:</h4>
  </div>
  
  <div class="span2">
    <h4>Anzahl Dellen:</h4>
  </div>
  
  <div class="span2">
    <h4>Größe Dellen:</h4>
  </div>
  
  <div class="span2">
    <h4>Vordrücken:</h4>
  </div>
  
  <div class="span2">
    <h4>Alu:</h4>
  </div>
  
 <div class="span2">
    <h4>AW DOL:</h4>
  </div>
  
  <div class="span2 ">
    <h4>AW A+E:</h4>
  </div>
  
  <div class="span2 ">
    <h4>Bemerkungen:</h4>
  </div>
  
  <div class="span2 ">
    <h4>AW / € per Teil:</h4>
  </div>
</div>

<!-- -->

<?php foreach($invoicelines as $item):?>

 <div class="row">
  <div class="span2">
        <?=$item['text'];?> &nbsp;  
  </div>
  
  <div class="span2">
        <?=$item['dent'];?>  &nbsp;
  </div>
  
  <div class="span2">
    <?=$item['size'];?>   &nbsp;
  </div>
  
  <div class="span2">
    <?=$item['pre'];?>   &nbsp;
  </div>
  
 <div class="span2">
    <?=$item['alu'];?>   &nbsp;
  </div>
  
  <div class="span2">
    <?=$item['aw_dol'];?>  &nbsp;
  </div>
  
  <div class="span2">
    <?=$item['aw_ae'];?>   &nbsp;
  </div>
  
  <div class="span2">
    <?=$item['note'];?>  &nbsp;
  </div>
  
  <div class="span2">
    <?=$item['aw_sum'];?>  &nbsp;
  </div>
</div>
<?php endforeach ;?>
   
 <br><br> 
  
<!-- letzte tabelle-->     


<div class="row">

    <div class="span2 offset12" >
       &nbsp;
    </div>

    <div class="span2" >
       <h4>Nettobetrag EUR:</h4>  
    </div>
  
    <div class="span2">
        <?=$infos['net'];?> &nbsp;  
    </div>
</div>

<div class="row">

    <div class="span2 offset12" >
       &nbsp;
    </div>

    <div class="span2" >
       <h4>19% Mwst</h4>  
    </div>
  
    <div class="span2">
        <?=$infos['tax'];?> &nbsp;  
    </div>
</div>

<div class="row">

    <div class="span2 offset12" >
       &nbsp;
    </div>

    <div class="span2" >
       <h4>Gesamtbetrag EUR:</h4>  
    </div>
  
    <div class="span2">
        <?=$infos['gross'];?> &nbsp;  
    </div>
</div>



</div>
</div>


<div class="row">    <input type="submit" name="submit" value="Speichern" />    </div>

