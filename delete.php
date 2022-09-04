<?php 
require_once 'inc/config.php';

$cid = (isset($_GET['p']))?$_GET['p']:null;

$sql = "DELETE FROM category WHERE id=$cid";

$q = mysqli_query($connect,$sql);

if ($q) {
	header('Location:product.php');
}



 ?>