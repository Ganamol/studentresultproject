<?php
 include 'connection.php';
 $stud_rollno=$_GET['rollno'];
  
 $data1=mysqli_query($con,"select * from student where  stud_rollno='$stud_rollno'");
 $row1=mysqli_fetch_assoc($data1);
    



if(isset($_POST['update']))
 {
$stud_name=$_POST['stud_name'];
$stud_class=$_POST['stud_class'];


$data=mysqli_query($con,"select * from student where stud_rollno='$stud_rollno'");


// if(mysqli_num_rows($data)>0)

// {



// }
// else
// {

  mysqli_query($con,"UPDATE `student` SET`stud_name`='$stud_name',`stud_class`='$stud_class' WHERE  stud_rollno='$stud_rollno'");
  echo "<script>alert('updated')</script>";
  header("location:view_student.php");
// }
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
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->

<?php
 include 'header.php';
 ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
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
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                  
                  
                  <label for="exampleInputEmail1">Student</label>
                    <input type="text" class="form-control" id="" value="<?php echo $row1['stud_name'];?>" placeholder="edit student" name="stud_name" required>
                
                    <?php
                    $data2=mysqli_query($con,"select * from class");
                    $row2=mysqli_fetch_assoc($data2);
                    ?>

                    <div class="form-group">
                        <label>Class</label>
                     <select class="form-control" name="stud_class" required>
                   
                                                                           <!-- select -->
                     <option value="<?php echo $row2['stud_class'];?>"><?php echo $row2['stud_class'];?></option>
                 <!-- <option value="<?php echo $row2['stud_class'];?>"></option> -->
               
               <?php
            while($row2=mysqli_fetch_assoc($data2))
            {
               ?>
        
           <option><?php echo $row2['stud_class'];?></option>
        
           <?php } ?>
                     
                        
                        </select>
                      </div>
                    </div>
                     
                  
                 

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="update">Edit</button>
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
