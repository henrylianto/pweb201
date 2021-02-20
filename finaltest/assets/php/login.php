<?php
session_start();



   if(isset($_POST["submitLogin"])){
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';

   $username =$_POST["username"];
   $password =$_POST["password"];

   CheckPassword($username,$password);
}
 ?>
