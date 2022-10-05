<?php 
session_start();
if((!isset($_SESSION['user'])))
{
    header("location:login.php");
    exit();
}





?>
<!doctype html>
<head>
    <title> php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>

<h1> Hello <?php echo $_SESSION['user'];?> </h1>

<br>
<br>
  <img src ="morty.jpg" length="400" width="600" alt="fuck">
<br>
<br>
<a href="listUser.php"><h2>list_user</h2></a>

<a href="logout.php"><h2>log_out</h2></a>

</body>