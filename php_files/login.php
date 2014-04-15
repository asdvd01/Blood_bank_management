<?php
/*session_start();
 require('connect.php');
if (isset($_POST['login']) and isset($_POST['password'])){
$username = $_POST['login'];
$password = $_POST['password'];
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
$query = "SELECT * FROM `rec` WHERE RNAME='$username' and PASS='$password'";
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 1){
$_SESSION['username'] = $username;
header("location:donor.php");
}else{
  
   header("location:main.php");
}
}

*/
?>