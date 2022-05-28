<?php
session_start();
 include 'connection.php';

 $subject=isset($_POST['subject'])?$_POST['subject']:"";

 


  // $_SESSION['sid']='8';
  $sub=$_SESSION['sid'];

 $student=isset($_POST['student'])?$_POST['student']:"";
 
  $_SESSION['student']=$student;

  $stud=$_SESSION['student'];

$data=mysqli_query($con,"select * from mark where sub_id='$subject' and stud_rollno='$student'");
$row=mysqli_fetch_assoc($data);
//  $id= $row['mark'];

if(isset($_POST['update']))
 {
  
  
    
    //  $subject=$_SESSION['sid'];

     $student=$stud;

     
    $mark=$_POST['mark'];

     mysqli_query($con,"UPDATE `mark` SET `mark`='$mark' WHERE stud_rollno='$student' and sub_id='$subject'");
       
      echo "<script>alert('updated')</script>";
     header("location:view_mark.php");
 
 
 
    }
//  var_dump($student);
//  exit();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->

<?php
 include 'header.php';
 ?>
  
 <?php
 include 'sidebar.php';
 ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="changepassword.php">Change password</a></li> 
              <li class="breadcrumb-item"><a href="logout.php">Logout</a></li> 
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Mark</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="">
                <div class="card-body">
                  <div class="form-group">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">

             
         
             <label for="exampleInputEmail1">Mark</label>
           
           <input type="text" name="mark" class="form-control" id="" value="<?php echo $row['mark'];?>" placeholder="Add mark" name="mark" required>
           <button type="submit" class="btn btn-primary" name="update">Update</button>
        
                 
          
          <div class="card-footer">
          
         
           </div>

         </div>
        </div>
       </div>
       </div>
       </form>
      </div>

    </div>

   </div>      
  </div> 
</section> 
        </div>
<?php
include 'script.php';
?> 


</body>
</html>
