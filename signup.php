<!DOCTYPE html>
<html>
<head>
<?php include 'rem.css'; ?>
</head>
<body>

<h2>Register profile</h2>

<form action="signup.php" method="POST">
  <div class="imgcontainer">
    <img src="image.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="fname"><b>Fullname</b></label>
    <input type="text" placeholder="Enter Fullname" name="fname" required>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="submit">Signup</button>
      </div>

</form>

</body>
</html>
<?php
include 'dbconnect.php';
$count=0;
$sql=mysql_query("select * from login");
if(isset($_POST['submit']))
  {
    $a=$_POST['fname'];
    $b=$_POST['uname'];
    $c=$_POST['psw'];
    while($row=mysql_fetch_array($sql))
    {
      if($row['username']!=$b)
        $count=1;
    }
      if($count==1) {
          mysql_query("insert into login values('$a','$b','$c')");
          echo "<script>alert('User registration success');</script>";
        }
          else {
            echo "<script>alert('Username already exists');</script>";
          }
  }
 ?>
