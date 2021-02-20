<?php

if(isset($_POST["submit-post"])){
  //code..
$nama =$_POST["userReal"];
$name =$_POST["userName"];
$email=$_POST["userEmail"];
$pwd=$_POST["password"];
$pwdRepeat=$_POST["password-repeat"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(emptyInputSignup($name,$pwd,$pwdRepeat,$nama,$email)!== false){
  header("location: ../../signup.php?error=emptyinput");
  exit();
}

if(invalidUsername($name)!== false){
  header("location: ../../signup.php?error=invalidUsername");
  exit();
}

if(invalidEmail($email)!== false){
  header("location: ../../signup.php?error=invalidUsername");
  exit();
}

if(pwdMatch($pwd,$pwdRepeat)!== false){
  header("location: ../../signup.php?error=passwordMismatch");
  exit();
}

if(userExists($conn,$name,$email)!== false){
  header("location: ../../signup.php?error=usernameTaken");
  exit();
}

createUser($conn,$name,$pwd,$email,$nama);

}
else{
  header("location: ../../signup.php?error=idunno");
}

 ?>
