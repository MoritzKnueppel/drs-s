<html>
<head>
<title><?php IF(isset($title)){echo $title;} ELSE {echo "DRS";} ?></title>
<link href="<?=base_url()?>assets/bootstrap/css/bootstrap.css" rel="stylesheet"> 

<?php
    if(isset($grocery_stylesheet)){
        $this->load->file('assets/grocery_crud/stylesheet.php');
    }
?>   



</head>
<body> 

  
<?php
    $this->load->view('navigation');   
?>
