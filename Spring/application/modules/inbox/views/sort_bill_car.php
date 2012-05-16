<?= (isset($succes)) ? $succes : ''; ?>
<!--<pre>
<? print_r($all_subcontractors); ?>
<? print_r($all_car); ?>
<? print_r($doc); ?>
</pre>-->

<?php echo validation_errors(); ?>

<!--nächstes Dokument-->
<?= form_open('Inbox/sort_bill_car/'.$id_doc); ?>
	<?= form_dropdown('id_subcontractor', $all_subcontractors, set_value('id_subcontractor')); ?>
	<br>
	<? for ($i = 0; $i < 10; $i++) : ?>
		<?= form_dropdown('sort['.$i.'][id_car]', $all_car, set_value('sort['.$i.'][id_car]')); ?>
		<?= form_input('sort['.$i.'][bill]',                set_value('sort['.$i.'][bill]')); ?>
		<br>
	<? endfor; ?>



	<?= form_hidden('id_doc', $id_doc); ?>
	
	<?= form_submit('submit', 'Speichern'); ?>

<?= form_close(); ?>

<?= form_open('Inbox/docs_open/'.$id_doc); ?>
	<?= form_submit('submit', 'Abbrechen'); ?>
<?= form_close(); ?>
