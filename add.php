<?php 
require_once 'inc/config.php';

$nom = (isset($_POST['nom']))?$_POST['nom']:null;

if (!empty($nom)) {
	$sql = "INSERT INTO category(id,nom) VALUES(NULL,'$nom')";

$q = mysqli_query($connect,$sql) or die(mysqli_error($q));

header('Location:product.php');
}

 ?>