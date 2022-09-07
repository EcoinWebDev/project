<?php 
require_once 'inc/config.php';
/*******************Upload*************************/
$exts = ["png","jpg","jpeg","svg"];
$photo_tmp = $_FILES['photo']['tmp_name'];
$photo = $_FILES['photo']['name'];

$photo_size = $_FILES['photo']['size'];
$ext_photo=  end(explode('.', $photo));
if (in_array($ext_photo, $exts)) {
 $photoUp = time().'.'.$ext_photo;
$upload = move_uploaded_file($photo_tmp, 'up/'.$photoUp);
}else echo "Not Allowed";

/*******************Upload*************************/




$nom = (isset($_POST['nom']))?$_POST['nom']:null;
$prix = (isset($_POST['prix']))?$_POST['prix']:null;
$cat_id = (isset($_POST['cat_id']))?$_POST['cat_id']:null;
//$photo = (isset($_POST['photo']))?$_POST['photo']:null;
$sql = "INSERT INTO products  values(NULL,'$nom',$prix,$cat_id,'$photoUp')";

$q = mysqli_query($connect,$sql) or die(mysqli_error($q));

//header('Location:product.php');



 ?>