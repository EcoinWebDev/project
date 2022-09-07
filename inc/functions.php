<?php

require_once 'config.php';

function getCatName($id){
	global $connect;
	$sql = "SELECT nom FROM category WHERE id = $id LIMIT 1";
	$q2 = mysqli_query($connect,$sql) ;
	$num = mysqli_num_rows($q2);
	if ($num>=1) {
			$nom = mysqli_fetch_array($q2,MYSQLI_ASSOC);
          return $nom['nom'];
	}
	return "No Cat";
}


  ?>