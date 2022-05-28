<?php
include 'connection.php';
$id=$_GET['id'];
// var_dump($id);
// exit();
mysqli_query($con,"delete from mark where m_id='$id'");

 echo "<script>alert('delete successfully')</script>";
echo "<script>window.location.href='delete_mark2.php';</script>";

?>

