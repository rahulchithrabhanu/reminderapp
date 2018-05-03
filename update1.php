<?php
include 'dbconnect.php';
session_start();
if(isset($_POST['submit']))
	{
		$t=$_POST['oldtitle'];
    $un=$_SESSION['un'];
		$a=$_POST['title'];
		$b=$_POST['desc'];
		$c=$_POST['date1'];
		$d=$_POST['time1'];
		mysql_query("delete from reminder where username='$un' and title='$t'");
		mysql_query("insert into reminder values('','$un','$a','$b','$c','$d')");
		header('location:updatereminder.php');
		}
	?>
