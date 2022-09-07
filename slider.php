

<?php 
require_once 'inc/config.php';
require_once 'inc/functions.php';

include_once "inc/header.php";

$sql = "SELECT * FROM products";
$q2 = mysqli_query($connect,$sql);




 ?>





<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

  	<?php 

while($data = mysqli_fetch_array($q2,MYSQLI_ASSOC)){
  	 ?>
    <div class="carousel-item active">
      <img src="up/<?= $data['photo'] ?>" class="d-block w-100" alt="...">
    </div>
 <?php } ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




 <?php 
include_once "inc/footer.php";

 ?>