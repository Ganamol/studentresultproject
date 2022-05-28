<?php
include 'connection.php';
$id=$_GET['id'];
// var_dump($id);
// exit();
mysqli_query($con,"delete from subject where s_id='$id'");

 echo "<script>alert('delete successfully')</script>";
echo "<script>window.location.href='delete_subject.php';</script>";

?>

