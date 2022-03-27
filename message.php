<?php
session_start();
$username= $_POST['username'];
$comment = $_POST['message'];
$connect = mysqli_connect('localhost','root','');
mysqli_select_db($connect, 'data_SIGHT');
$sql = "INSERT INTO feedback (name,message) VALUES('$username','$comment')";
  if(mysqli_query($connect,$sql)){
header("Location: profile.php");
  }
