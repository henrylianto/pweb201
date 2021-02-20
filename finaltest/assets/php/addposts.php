<?php
session_start();
$fileDestination=$_SESSION['imgpath'];
$userID=$_SESSION['id'];

if(isset($_POST["submit"])){
  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  $title =$_POST["title"];
  $tags =$_POST["tags"];
  $penjelasan=$_POST["paragraph"];
  $userID=$_SESSION['id'];
  $filedestination = $_SESSION['imgpath'];

  InputPosts($conn,$title,$tags,$penjelasan,$userID,$filedestination);
}

  //code..
 ?>
