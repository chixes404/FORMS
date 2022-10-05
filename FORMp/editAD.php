<?php include "DBp_conn.php" ;?>
 
<?php 

if(isset($_POST["submit"])){

    $name= $_POST["name"];
    $pass= $_POST["pass"];
    $id= $_POST['id'];
   
   $query="UPDATE form SET name='$name', password='$pass' WHERE id ='$id' ";
   $query_conn=mysqli_query($conn,$query);
     if(!$query_conn)
     {
       echo "update failed";
     }

}
?>



<!DOCTYPE html>
<head>
    <title> php</title>
</head>
<body>

<form action="editAD.php" method="post">
<label> enter your name</label>
<input type="text" name="name">
<br>
<br>
<label>enter your password</label>
<input type="password" name="pass">
<br>
<br>
<select id="id" name="id">
<?php 
 $query="SELECT * FROM form" ;
 $query_conn=mysqli_query($conn,$query);
  if(!$query_conn)
  {
    echo "query failed".mysqli_error();
  }

  while  ($row=mysqli_fetch_assoc($query_conn ))
   {
    
    $id = $row['id'];

    echo"<option value='$id'>$id</option>";
    
   }
?>
</select>

<input type="submit" name="submit" value="update">
<br>
<a href="listUser.php"><strong>Userlist</strong></a>
</form>

 
</body>