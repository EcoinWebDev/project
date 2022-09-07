<?php 
require_once 'inc/config.php';
/************ GET INFO Category***************/
$cid = (isset($_GET['s']))?$_GET['s']:null;
if (isset($cid)) {
	$sql_get = "SELECT * FROM `category` WHERE id= $cid LIMIT 1";
$q_get = mysqli_query($connect,$sql_get);
$get_data = mysqli_fetch_array($q_get,MYSQLI_ASSOC);
}
/************ /GET INFO Category***************/
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form action="update.php" method="post">
		<input type="text" name="nom" value="<?=$get_data['nom']    ?>" placeholder="Name">
   <input type="hidden" name="cat_id" value="<?=$get_data['id']    ?>">
		<button>Edit Cat</button>
	</form>
</body>
</html>