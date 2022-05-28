<?php
 include 'connection.php';
 $data=mysqli_query($con,"select * from class");


 if(isset($_POST['viewstudent']))

 {

   $stud_class=$_POST['stud_class'];
   $data2=mysqli_query($con,"select * from student where stud_class='$stud_class' ");
   $data3=mysqli_query($con,"select * from subject where c_id='$stud_class' ");

 }
 
 if(isset($_POST['addmark']))

 {

    $stud_rollno=$_POST['student'];
    //  var_dump($stud_rollno);
    // exit();
   $sub_id=$_POST['subject'];
   $mark=$_POST['mark'];
  if($mark<=50)
  {
   mysqli_query($con," INSERT INTO `mark`( `stud_rollno`, `sub_id`, `mark`) VALUES ('$stud_rollno','$sub_id','$mark')");
 echo " <script>alert('sucess')</script>";
  }
  else
  {
    echo " <script>alert('enter mark less than 50')</script>";
  }
 }

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
                <h3 class="card-title">Add Mark</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Class</label> 
                        
                       
                     <select class="form-control" name="stud_class" required>
                   <option value="">Select</option>
                  
                  <?php
            while($row=mysqli_fetch_assoc($data))
            {
               ?>
          <option value="<?php echo $row['stud_class'];?>"><?php echo $row['stud_class'];?></option>  
       <?php 
         }
        ?>
          </select>
           
          </div>
          <button type="submit" class="btn btn-primary" name="viewstudent">Submit</button>
        
        </form>
<!-- student -->

     <form method="POST">
         <label>Student</label>
        
       
        <select class="form-control" name="student" >
                   <option value="" >Select</option>
                  
                  <?php

             while($row2=mysqli_fetch_assoc($data2))
             {
               ?>
          <option value="<?php echo $row2['stud_rollno'];?>" ><?php echo $row2['stud_name'];?></option>  
       <?php 
         }
        ?>
         </select>
     

          <label>Subject</label>

          <select class="form-control" name="subject" >
                   <option value="">Select</option>
                  
                  <?php

             while($row3=mysqli_fetch_assoc($data3))
             {
               ?>
          <option value="<?php echo $row3['s_id'];?>" ><?php echo $row3['subject_name'];?></option>  
       <?php 
         }
        ?>
          </select>

          <label for="exampleInputEmail1">Mark</label>
         <input type="text" class="form-control" id="" placeholder="Add mark" name="mark" required>
                
         <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="addmark">Submit</button>
                </div>
      </section>
     </div>
        </form>
        </div>
        </div>  
        
        
       
        
  </div>  
</div
<?php
include 'script.php';
?> 

</form>
</body>
</html>
