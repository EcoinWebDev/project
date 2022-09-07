<?php 

$host = "localhost";
$user = "root";
$password= "";
$dbname = "project";

$connect = @mysqli_connect($host,$user,$password,$dbname) or die(mysqli_connect_error($connect));

 ?>