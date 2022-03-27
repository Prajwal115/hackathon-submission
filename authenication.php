<html>
<style>
h1{
  color:black;
  font-size: 45px;
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
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['cpassword'];
$box = $_POST['cb'];

$s = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($connect,$s);
$num = mysqli_num_rows($result);
if($num == 1){
  echo "<img src = 'IMG/cross.png'>";
  echo "<h1>Username Already Taken</h1>";
}
else{
  $reg = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
  mysqli_query($connect,$reg);
$_SESSION["username"] = "$username";
if(ucwords($username[0]) === "A"){
  echo "<img src = 'IMG/A.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "B"){
  echo "<img src = 'IMG/B.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "C"){
  echo "<img src = 'IMG/C.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "D"){
  echo "<img src = 'IMG/D.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "E"){
  echo "<img src = 'IMG/E.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "F"){
  echo "<img src = 'IMG/F.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "G"){
  echo "<img src = 'IMG/G.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "H"){
  echo "<img src = 'IMG/H.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "I"){
  echo "<img src = 'IMG/I.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "J"){
  echo "<img src = 'IMG/J.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "K"){
  echo "<img src = 'IMG/K.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "L"){
  echo "<img src = 'IMG/L.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "M"){
  echo "<img src = 'IMG/M.png'>";
  echo "</img>";
  echo $_SESSION['username'];
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "N"){
  echo "<img src = 'IMG/N.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "O"){
  echo "<img src = 'IMG/O.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "P"){
  echo "<img src = 'IMG/P.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "Q"){
  echo "<img src = 'IMG/Q.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "R"){
  echo "<img src = 'IMG/R.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "S"){
  echo "<img src = 'IMG/S.png'>";

  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "T"){
  echo "<img src = 'IMG/T.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "U"){
  echo "<img src = 'IMG/U.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "V"){
  echo "<img src = 'IMG/V.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "W"){
  echo "<img src = 'IMG/W.png'>";
  echo "</img>";
  echo $_SESSION['username'];
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "X"){
  echo "<img src = 'IMG/X.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "Y"){
  echo "<img src = 'IMG/Y.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
if(ucwords($username[0]) === "Z"){
  echo "<img src = 'IMG/Z.png'>";
  echo "</img>";
  echo "<p>";
  echo $_SESSION['username'];
  echo "</p>";
  echo "<h1>";
  echo "Account Created";
  echo "</h1>";
}
}
if($box == "YES"){
  $g = "INSERT INTO newsletter (username,email,password) VALUES('$username','$email','$password')";
mysqli_query($connect,$g);
}
