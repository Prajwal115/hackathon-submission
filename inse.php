<html>
<style>
h1{
  color:black;
  font-size: 35px;
  font-family: "Creato Display",sans-serif;
  font-weight: 500;
  letter-spacing: 2px;
  text-align: center;
transform: translateY(-290%);

}
img{
  border-radius: 50%;
  width:10%;
  top:50%;
  left:50%;
  transform: translate(450%,100%);
}
p{
  color:black;
  font-size: 28px;
  font-family: "Lato", sans-serif;
  font-weight: bold;
  text-align: center;
  transform: translateY(400%);
  text-transform: uppercase;
}
</style>
</html>
<?php
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG', true);
session_start();
$connect = mysqli_connect('localhost','root','');
mysqli_select_db($connect, 'data_SIGHT');

$username = $_POST['username'];
$password = $_POST['password'];

$s = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($connect,$s);
$rows = mysqli_num_rows($result);
if($rows==1){
  echo "<img src = 'IMG/yes.png'>";
  echo "<h1>Successfully Logged in</h1>";
    $_SESSION["username"] = "$username";
    header("Refresh:4; url=profile.php");
}
else{
  echo "<img src = 'IMG/cross.png'>";
  echo "<h1>Incorrect Username/Password</h1>";
      header("Refresh:4; url=register.php");
}
