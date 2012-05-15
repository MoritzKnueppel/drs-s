<pre>
<? print_r($doc); ?>
<? print_r($doctype); ?>
<? print_r($car); ?>
</pre>


<!--nächstes Dokument-->
<?= form_open('Inbox/docs_open'); ?>

<button class="btn span1" type="submit" name="status" value="next">
	<i class="icon-chevron-right"></i>NEXT
	<?= form_hidden('id_doc', $doc['id_doc']); ?>
</button>


<?= form_close(); ?>



<!--Zuweisung-->
<?= form_open('Inbox/docs_open'); ?>


	<?= form_dropdown('id_doctype', $doctype); ?>
	<?= form_dropdown('id_car', $car); ?>
	
	<?= form_hidden('status', 'save'); ?>
	<?= form_hidden('id_doc', $doc['id_doc']); ?>
	
	<?= form_submit('submit', 'Speichern'); ?>
<?= form_close(); ?>