<?php
require 'dbh.inc.php';
require 'signup.inc.php';
if(isset($_POST["submit"])){
  //code..
$name=$_POST["username"];
$pwd=$_POST["password"];
$pwdRepeat=$_POST["password-repeat"];}

echo "$conn";
echo "$name";
echo "$pwd";
 ?>
