<?php

function emptyInputSignup($name,$pwd,$pwdRepeat,$nama,$email){
$result;
if(empty($name||$pwd||$pwdRepeat||$nama||$email)){
  $result=true;
} else{
  $result=false;
}
return $result;
}


function invalidUsername($name){
$result;
if(!preg_match("/^[a-zA-Z0-9]*$/",$name)){
  $result=true;
} else{
  $result=false;
}
return $result;
}

function invalidEmail($email){
$result;
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  $result=true;
} else{
  $result=false;
}
return $result;
}

function pwdMatch($pwd,$pwdRepeat){
  $result;
  if($pwd !== $pwdRepeat){
    $result=true;
  } else{
    $result=false;
  }
  return $result;
}

function userExists($conn,$name,$email){
  $sql = "SELECT * FROM users WHERE userName = ? OR userEmail = ? ;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
    // code...
      header("location: ../../signup.php?error=gagalQuery");
      exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$name);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
      return $row;
    } else { $result=false;
    }
              return $result;
    mysqli_stmt_close($stmt);
}

function createUser($conn,$name,$pwd,$email,$nama){
  $sql = " INSERT INTO users (userName,userPass,userReal,userEmail) VALUES(?, ? ,? ,?) ;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
    // code...
      header("location: ../../signup.php");
      exit();
    }



    mysqli_stmt_bind_param($stmt,"ssss",$name,$pwd,$nama,$email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../../index.php?signupSukses");
    exit();
}


function InputPosts($conn,$title,$tags,$userID,$penjelasan,$filedestination){
   $sql = " INSERT INTO posts (user_ID,imgpath,tags,paragraph,title) VALUES($title, $tags ,$userID ,$penjelasan, $filedestination) ;";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt,$sql)) {
     // code...
       header("location: ../../signup.php?error=gagal");
       exit();
     }
     mysqli_stmt_bind_param($stmt,"sssss",$userID,$filedestination,$tags,$title);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);
     header("location: ../../index.php?signupSukses");
     exit();
   }

   function CheckPassword($conn,$username,$password){
       $sql = "SELECT userPass,userID FROM users WHERE userName ='$username'";
       $stmt = mysqli_stmt_init($conn);
       if (!mysqli_stmt_prepare($stmt,$sql)) {
         // code...
           header("location: ../../signup.php?error=gagalQuery");
           exit();
         }

         mysqli_stmt_bind_param($stmt,"s",$userID);
         mysqli_stmt_execute($stmt);

         $resultData = mysqli_stmt_get_result($stmt);

         if($stmt == $password){
           $_SESSION = ['1'];
         }
                   return $result;
         mysqli_stmt_close($stmt);
     }
 ?>
