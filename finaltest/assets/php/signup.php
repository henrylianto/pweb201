<?php
include_once 'dbh.php';


$first =$_POST['first'];
$username =$_POST['username'];
$email =$_POST['email'];
$pwd =$_POST['pwd'];

$sql ="INSERT INTO users (first,username,email,pwd) VALUES('$first','$user','$email','$pwd')";
$result= mysqli_query($conn,$sql);

$sql ="SELECT * FROM users WHERE username=$username AND first='$first'";
$result= mysqli_query($conn,$sql);

if (mysqli_num_rows($result)> 0){
  while($row = mysqli_fetch_assoc($result)){
    $userid= $row['id'];
    $sql="INSERT INTO profileimg (userid,status) VALUES('$userid',1)";
     mysqli_query($conn,$sql);
     }
  else{
    echo ="You Have an error";
  }
}
 ?>
