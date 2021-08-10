<?php
error_reporting(0);
  $conncection=mysqli_connect("localhost","root","");
  $db=mysqli_select_db($conncection,"online_notice-board");
  if(isset($_POST['register'])){
	$t=$_POST['fname'];
	$u=$_POST['lname'];
  $e=$_POST['email'];
	$p=$_POST['password'];
	$c=$_POST['class'];
	//code for image uploading
  $filename = $_FILES["uploadfile"]["name"];
      $tmp_name = $_FILES["uploadfile"]["tmp_name"];
          $folder = "/uploaded_images/".$filename;
          if(move_uploaded_file($folder, $filename));
          echo $filename;

	$i="insert into users(uid,fname,lname,email,password,class,image) values(null,'$t','$u','$e','$p','$c','$filename')";
  $query_run=mysqli_query($conncection,$i);
    if($query_run){
       echo "<script>alert('Registration successfully...You may now login.');
       window.location.href = 'index.php';
       </script>";
     }
     else {
       echo "<script>alert('Try Again');
       </script>";
     }
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Online Notice Board System</title>
  <!--BootStrap File-->
  <link rel="stylesheet" href="bootstrap-4.4.1/css/bootstrap.min.css">
  <!--CSS fieldset-->
  <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>

  </script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--Header Section COde Start Here-->
    <div class="row" id="header">
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
        <h3>Online Notice Board System</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <!-- Register Form Code Start Here-->
    <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h4>Registration Form</h4></center>
          <form  action="register.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>First Name</label>
                <input class="form-control" type="text" name="fname" placeholder="Enter Your First Name">
            </div>
            <div class="form-group">
              <label>Last Name</label>
                <input class="form-control" type="text" name="lname" placeholder="Enter Your Last Name">
            </div>
           <div class="form-group">
             <label>Email</label>
               <input class="form-control" type="text" name="email" placeholder="Enter Your Email">
           </div>
        <div class="form-group">
            <label>PassWord</label>
            <input class="form-control" type="text" name="password" placeholder="Enter Your PassWord">
        </div>

        <div class="form-group">
          <label>Select Your Branch:</label>
            <select class="form-control" name="class">
                  <option>-Select-</option>
                  <option>CSE</option>
                  <option>IT</option>
                  <option>EEE</option>
                  <option>CIVIL</option>
                  <option>MECH</option>
                  <option>ECE</option>
            </select>
        </div>
        <div class="form-group">
            <label>Upload Your Image</label>
            <input class="form-control" type="file" name="uplaodfile" required>
        </div>
        <button class="btn btn-primary" type="submit" name="register">Register</button>
          </form>
          <a href="index.php">Click Here to Login</a>
        </div>

      </div>
    </section>
</body>
</html>
