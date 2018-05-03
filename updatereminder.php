<!DOCTYPE html>
<html>
<head>
<?php include 'rem.css'; ?>
<?php include 'table.css'; ?>
</head>
<body>
<?php include 'header.php'; ?>
<h2>Update Reminder</h2>
<form name="update" method="POST">
  <div class="imgcontainer">
    <img src="image.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <table id="customers">
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Date</th>
        <th>Time</th>
        <th>Action</th>
      </tr>
        <?php
        include 'dbconnect.php';
        session_start();
        $un=$_SESSION['un'];
        $sql=mysql_query("select * from reminder where username='$un' order by rdate");
        while ($row=mysql_fetch_array($sql)) {
          $id=$row['title'];
          echo "<tr><td>".$row['title']."</td><td>".$row['description']."</td><td>".$row['rdate']."</td><td>".$row['rtime']."</td><td><a href='update.php?id=$id'>Update</a></td></tr>";
        }
        ?>
    </table>
    </div>

</form>
<?php include 'footer.php'; ?>
</body>
</html>
