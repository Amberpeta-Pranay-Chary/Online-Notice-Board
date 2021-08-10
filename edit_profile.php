<?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice-board");
  $fname = "";
  $lname = "";
  $email = "";
  $password = "";
  $class = "";
  $query = "select * from users where email = '$_SESSION[email]'";
  $query_run = mysqli_query($connection,$query);
  while($row = mysqli_fetch_assoc($query_run)){
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $password = $row['password'];
    $class = $row['class'];
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <div class="form-group">
        <label>First Name:</label>
        <input type="text" class="form-control" name="fname" value="<?php echo $fname;?>">
      </div>
      <div class="form-group">
        <label>Last Name:</label>
        <input type="text" class="form-control" name="lname" value="<?php echo $lname;?>">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input type="password" class="form-control" name="password" value="<?php echo $password;?>">
      </div>
      <div class="form-group">
        <label>Select Class:</label>
        <select class="form-control" name="class" required>
          <option><?php echo $class;?></option>
          <option>CSE</option>
          <option>IT</option>
          <option>EEE</option>
          <option>ECE</option>
          <option>MECH</option>
        </select>
      </div>
      <button type="submit" name="update_profile" class="btn btn-primary">Update</button>
    </form>
  </body>
</html>
