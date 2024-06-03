<?php
  session_start();
  if(!isset($_SESSION['email']))  {
    header('location:login.php');
  }

  if(isset($_POST['logout'])){
    header("location:logout.php");
  }
?>
<h1>Lại là trang admin đây !</h1>

<form action="admin.php" method="post">
    <button type="submit" name="logout">Logout</button>
</form>