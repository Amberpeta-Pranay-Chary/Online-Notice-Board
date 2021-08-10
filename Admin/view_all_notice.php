<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center><h3>All Notices</h3></center>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"online_notice-board");
    $query='select * from  notice';
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run))
    {
      ?>
      <div class="card">
        <div class="card-bordy">
          <h5 class="card-title"><?php echo $row['title'] ?></h5><br>
          <p class="card-text"><?php echo $row['message'] ?></p><br>
        </div>
      </div>
      <?php
    }
     ?>
  </body>
</html>
