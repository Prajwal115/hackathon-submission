<?php
session_start();
$username= $_POST['name'];
$comment = $_POST['comment'];
$connect = mysqli_connect('localhost','root','');
mysqli_select_db($connect, 'data_sus');
$sql = "INSERT INTO feedback (username,comment) VALUES('$username','$comment')";
  if(mysqli_query($connect,$sql)){
header("Location: portal.php");
  }
