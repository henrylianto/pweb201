<?php
session_start();
include_once 'assets/php/dbh.inc.php';
 ?>


<?php

$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
  while($row = mysqli_fetch_assoc($result)){
     $id = $row['id'];
     $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
     $resultImg = mysqli_query($conn,$sqlImg);
     while($rowImg = mysqli_fetch_assoc($resultImg)){
       echo "<div>";
          if($rowImg['status'] == 0){
             echo "<img src='assets/img/profile".$id.".jpg'>";
          }else{
             echo "img src='uploads/profiledefault.jpg'";
          }
          echo"<p>"$row['username']"</p>";
        echo "<div>";

     }
  }
  // code...
}else{
  echo"There are no users";
}


if(isset($_SESSION['id'])) {
  if ($_SESSION['id'] == 1){
    echo "You are logged in as user #1";
  }
  echo "<form action='upload.php' method='post' enctype='multipart/form-data'>
       <input type='file' name='file'>
       <button type='submit' name='submit'>Upload</button>
       </form>";
} else{
  echo "You are not logged in!";
  echo"<form action='assets/php/login.php' method='post'>
       <input type='text' name='first' placeholder='Name'>
       <input type='text' name='username' placeholder='Username'>
       <input type='email' name='email' placeholder='Email'>
       <input type='password' name='pwd' placeholder='Password'>
       <button type='submit' name='submitSignup'>SignUp</button>
       </form>";
}

 ?>


<p>Login as User</p>
<form action="assets/php/login.php" method="post">
  <button type="submit" name="submitLogin">Login</button>
</form>

<p>Logout as User</p>
<form action="assets/php/logout.php" method="post">
  <button type="submit" name="submitLogout">Logout</button>

</form>
