<?php
session_start();
$_SESSION['$fileDestination'];



if (isset($_POST['submitImage'])){
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];


      $fileExt = explode(".",$fileName);
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array('jpg','jpeg','png','pdf');

      if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
          if($fileSize < 100000){

            $fileNameNew = $today.".". $fileActualExt;
              $fileDestination = "assets/img/".$fileNameNew;
             move_uploaded_file($fileTmpName,$fileDestination);
            header("location: addpost.php");
            exit();
          } else {
            echo"File terlalu besar";
          }
        }else {
          echo"JNE lagi Down";
        }
      } else {
        echo "File jenis ini tidak diterima";
      }
}
 ?>
