<?php 
require_once 'inc/config.php';
$sql2 = "SELECT * FROM category";
$q2 = mysqli_query($connect,$sql2) or die(mysqli_error($q2));
$status = (isset($_GET['status']))?$_GET['status']:null;
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	
	<form action="add.php" method="post">
		<input type="text" name="nom" placeholder="Name">
		<button>Add Cat</button>
	</form>

<?php if ($status) {  ?>

<div class="update">Updateed Ok Thanks</div>
<?php } ?>

<table border="1" cellpadding="7" cellspacing="0">
	<caption>Cateory List</caption>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nom</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 

         while($data = mysqli_fetch_array($q2,MYSQLI_ASSOC)){
		 ?>
		<tr>
			<td><?= $data['id'] ?></td>
			<td><?= $data['nom'] ?></td>
			<td>
				<a href="delete.php?p=<?= $data['id'] ?>">Delete</a>
				<a href="edit.php?s=<?= $data['id'] ?>">Edit</a></
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
     


</body>
</html>