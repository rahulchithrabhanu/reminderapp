<!DOCTYPE html>
<html>
<head>
<?php include 'rem.css'; ?></head>
<body>
<script>alert("Kindly avoid special characters while entering details");</script>
<?php include 'header.php'; ?>
<h2>Create Reminder</h2>
<form name="create" method="POST" action="createreminder.php">
  <div class="imgcontainer">
    <img src="image.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="title"><b>Title</b></label>
    <input type="text" placeholder="Enter Title" name="title" required>

    <label for="desc"><b>Description</b></label>
    <input type="text" placeholder="Enter Description" name="desc" required>
<label for="date1"><b>Select Date</b></label>
    <input type="date" name="date1" required>
    <label for="time1"><b>Select Time</b></label>
        <input type="time" name="time1" required>
    <button type="submit" name="submit">Create</button>
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
    $un=$_SESSION['un'];
		$a=$_POST['title'];
		$b=$_POST['desc'];
		$c=$_POST['date1'];
		$d=$_POST['time1'];
		$s=mysql_query("insert into reminder values('','$un','$a','$b','$c','$d')");
		}
	?>
