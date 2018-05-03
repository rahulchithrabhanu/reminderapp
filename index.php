<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php include 'rem.css'; ?></head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">YourReminder</a>
      </div>
          </div>
  </nav>
<h2>Login</h2>

<form name="login" method="POST">
  <div class="imgcontainer">
    <img src="image.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="submit" formaction="index.php">Login</button>
      </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw"><a href="signup.php">NEW USER?</a></span>
  </div>
</form>
<?php include 'footer.php'; ?>
</body>
</html>
<?php
include 'dbconnect.php';
session_start();
if(isset($_POST['submit']))
{
$qry="SELECT * FROM login WHERE username='" . $_POST["uname"] . "' and password = '".$_POST["psw"]."'";
$result = mysql_query($qry) or die(mysql_error);
$row  = mysql_fetch_array($result);
if(isset($_POST['submit']))
{
if(mysql_num_rows($result)>0)
{
	$_SESSION["un"] = $row['username'];
	header("Location: home.php");
}
else
{
    echo "<script type='text/javascript'>alert('INVALID USERNAME/PASSWORD')</script>";
}
}
}
 ?>
