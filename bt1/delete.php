<?php
include 'connectdb.php';
$id =$_GET['id'];
$sql ="DELETE FROM products WHERE id =$id";
mysqli_query($connect,$sql);
header("Location:List.php");
?>
