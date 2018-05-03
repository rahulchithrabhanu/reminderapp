<html>
<head>
  <?php include 'rem.css'; ?>
</head>
<body>
  <?php include 'header.php'; ?>
  <h2>WELCOME <?php session_start(); echo $_SESSION['un'];?></h2>
  <form action="/action_page.php">
    <div class="imgcontainer">
      <img src="image.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
  <button type="submit" formaction="createreminder.php">Create Reminder</button>
    <button type="submit" formaction="updatereminder.php">Update Reminder</button>
      <button type="submit" formaction="viewreminder.php">View Reminders</button>
        </div>


  </form>
  <footer>
<?php include 'footer.php'; ?>
</footer>
</body>
</html>
