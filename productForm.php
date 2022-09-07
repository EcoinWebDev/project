<?php 
require_once 'inc/config.php';

include_once "inc/header.php";

/**************************************/
$sql2 = "SELECT * FROM category";
$q2 = mysqli_query($connect,$sql2) or die(mysqli_error($q2));
/**************************************/





 ?>



<form action="productAdd.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" name="nom">
   
  </div>
  <div class="form-group">
    <label for="prix">Prix</label>
    <input type="text" class="form-control" name="prix" >
  </div>

  <div class="form-group m-2">
    <label for="category">Category</label>
  <select class="form-select" name="cat_id">
  <option selected>Open this select menu</option>
    <?php 

         while($data = mysqli_fetch_array($q2,MYSQLI_ASSOC)){
     ?>
  <option value="<?= $data['id'] ?>"><?= $data['nom'] ?></option>
 <?php } ?>
</select>
  </div>


  <div class="form-group m-3">
     <div class="input-group">
       <div class="custom-file">
         <input type="file" name="photo" class="custom-file-input" >
        
       </div>
     
     </div>
  </div>
  <button type="submit" class="btn btn-primary btn-lg">Add Product</button>
</form>





 <?php 
include_once "inc/footer.php";

 ?>