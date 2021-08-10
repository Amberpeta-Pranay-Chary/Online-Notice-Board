<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center><h3>Notices For You</h3></center>
    <?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"online_notice-board");
    $query = "select * from notice where to_whom = 'To All' OR to_whom = 'To Class $_SESSION[class]'";
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
