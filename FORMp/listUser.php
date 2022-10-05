<?php include "DBp_conn.php"; ?>
<?php
//select all user
$query ="SELECT * FROM form ";
$rresult= mysqli_query($conn,$query);
?>
<html>
  <head>
    <title> list user</title>
    
  </head>
<body>
<h1>List users</h1>

<table>
  <thead>
    <tr>
        <th>Id</th>
		<th>Name</th>
        <th>Email</th>
        <th>Action</th>
     </tr>
    </thead>
    <?php
while($row = mysqli_fetch_assoc($rresult)) { //<php echo $row == < ?= $row
?>
        <tr>
              <td> <?= $row['id']?></td> 
              <td> <?= $row['name']?></td>
              <td> <?= $row['email']?></td>
              <td> <a href = "editAD.php?id= <?= $row['id']?>">Edit</a> | <a href= "delAD.php?id= <?=$row['id']?>">Delete</a></td> <tr>
 
<?php
 }
?>    
</tbody>
<tfoot> 
<tr>
 <td colspan="2" styly="text-align : center"><?= mysqli_num_rows($rresult)?> users</td>
 <td colspan="2" styly="text-align : center"><a href="signUP2.php">Add user</a></td>
</tr>
   </tfoot>
  </table>
 </body>
</html>

