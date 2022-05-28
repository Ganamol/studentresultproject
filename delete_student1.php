<?php
include 'connection.php';

$stud_rollno=$_GET['stud_rollno'];

mysqli_query($con,"delete from student where stud_rollno='$stud_rollno'");
// echo "<script>alert('delete successfully')</script>";
 echo "<script>window.location.href='delete_student.php';</script>";
?>