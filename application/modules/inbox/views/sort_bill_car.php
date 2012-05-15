<?= (isset($succes)) ? $succes : ''; ?>

<? print_r($doc); ?>

<?php echo validation_errors(); ?>

<!--nächstes Dokument-->
<?= form_open('Inbox/sort_bill_car/'.$id_doc); ?>

	Kennzeichen:     <?= form_input('registration_number', set_value('registration_number')); ?>
	Vorname:         <?= form_input('first_name',          set_value('first_name')); ?>
	Nachname:        <?= form_input('last_name',           set_value('last_name')); ?>
	Strasse:         <?= form_input('street',              set_value('street')); ?>
	Ort:             <?= form_input('city',                set_value('city')); ?>
	Firma:           <?= form_input('company',             set_value('company')); ?>
	Fahrgestell-Nr.: <?= form_input('vin',                 set_value('vin')); ?>
	PLZ:             <?= form_input('zip',                 set_value('zip')); ?>

	<?= form_hidden('id_doc', $id_doc); ?>
	
	<?= form_submit('submit', 'Speichern'); ?>

<?= form_close(); ?>

<?= form_open('Inbox/docs_open/'.$id_doc); ?>
	<?= form_submit('submit', 'Abbrechen'); ?>
<?= form_close(); ?>
