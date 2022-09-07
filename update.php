<?php 
require_once 'inc/config.php';

$nom = (isset($_POST['nom']))?$_POST['nom']:null;
$cat_id= (isset($_POST['cat_id']))?$_POST['cat_id']:null;

if (!empty($cat_id)) {
		$sql_update = "UPDATE category SET nom ='$nom' WHERE id=$cat_id";
	$q_update = mysqli_query($connect,$sql_update);

	if ($q_update) {
		header("Location:product.php?status=1");
	}
}




 ?>