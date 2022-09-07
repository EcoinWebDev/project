<?php 
require_once 'inc/config.php';
require_once 'inc/functions.php';

include_once "inc/header.php";

$sql = "SELECT * FROM products";
$q2 = mysqli_query($connect,$sql);


while($data = mysqli_fetch_array($q2,MYSQLI_ASSOC)){

 ?>


<div class="card" style="width: 18rem;">
  <img src="up/<?= $data['photo'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $data['nom'] ?></h5>
    <p class="card-text"><?= getCatName($data['cat_id']) ?></p>
    <a href="#" class="btn btn-primary"><?= $data['prix'] ?> $</a>
  </div>
</div>
 <?php } ?>

 <?php 
include_once "inc/footer.php";

 ?>