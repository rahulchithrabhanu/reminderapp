<?php
include 'dbconnect.php';
session_start();
$t=$_GET['id'];
$un=$_SESSION['un'];
$sql=mysql_query("select * from reminder where username='$un' and title='$t'");
while ($row=mysql_fetch_array($sql)) {
  $d=$row['rdate'];
  $rt=$row['rtime'];
  $desc=$row['description'];
}

?>
<!DOCTYPE html>
<html>
<head>
<?php include 'rem.css'; ?></head>
<body>

<h2>Update Reminder</h2>

<form name="create" method="POST" action="update1.php">
  <div class="imgcontainer">
    <a href="logout.php"><h4 align='right'>Logout</h4></a>
    <img src="image.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="title"><b>Title</b></label>
    <input type="text" name="title" value="<?php echo $t; ?>" required>
<input type="hidden" name="oldtitle" value="<?php echo $t; ?>">
    <label for="desc"><b>Description</b></label>
    <input type="text" name="desc" value="<?php echo $desc; ?>" required>
<label for="date1"><b>Select Date</b></label>
    <input type="date" name="date1" value="<?php echo $d; ?>" required>
    <label for="time1"><b>Select Time</b></label>
        <input type="time" name="time1" value="<?php echo $rt; ?>" required>
    <button type="submit" name="submit">Create</button>
      </div>

</form>

</body>
</html>
