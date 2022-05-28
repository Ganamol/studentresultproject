<?php
include 'connection.php';
$id=$_GET['id'];
mysqli_query($con,"delete from class where id='$id'");

echo "<script>alert('delete successfully')</script>";
echo "<script>window.location.href='delete_class.php';</script>";

?>

