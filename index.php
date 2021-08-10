<?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice-board");

  if(isset($_POST['login'])){
    $query = "select * from users where email = '$_POST[email]' AND password = '$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
      $_SESSION['email'] = $_POST['email'];
      while($row = mysqli_fetch_assoc($query_run)){
        $_SESSION['class'] = $row['class'];
        echo "<script>
        window.location.href = 'user_dashboard.php';
        </script>";
      }
    }
    else{
      echo "<script>alert('Please Enter correct email id and password');

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
<body class="bi">
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
    <!-- LOgin Form Code Start Here-->
    <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block" >
          <center class="large" style="color:Tomato"><h2><b>Student Login form</b></h2></center>
          <form  action="index.php" method="post">
           <div class="form-group">
             <label class="large"><b><strong>Email ID:</strong></b></label>
               <input class="form-control" type="text" name="email" placeholder="Enter Your Email">
           </div>
        <div class="form-group">
            <label class="large"><strong>PassWord</strog></label>
            <input class="form-control" type="password" name="password" placeholder="Enter Your PassWord">
        </div>
        <button class="btn btn-primary" type="submit" name="login">Login</button>
          </form>
          <a href="register.php">Click Here to Register</a>
        </div>

      </div>
    </section>
</body>
</html>
