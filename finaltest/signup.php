<?php
require_once'header.php'
 ?>


<div class="register-photo">
    <div class="form-container">
        <div class="image-holder"></div>
        <form action ="assets/php/signup.inc.php" method="post">
            <?php
                    if (isset($_GET["error"])){
                      if ($_GET["error"] == "emptyInputSignup"){
                        echo "<p>Isi Semua Boks</p>";
                      }
                      else if ($_GET["error"] == "invalidUsername"){
                        echo "<p>Ganti Username Lain</p>";
                      }
                      else if ($_GET["error"] == "invalidEmail"){
                        echo "<p>Email Salah</p>";
                      }
                      else if ($_GET["error"] == "pwdMatch"){
                        echo "<p>Password salah,Isi ulang</p>";
                      }
                      else if ($_GET["error"] == "userExists"){
                        echo "<p>User telah terpakai,Ganti yang lain.</p>";
                      }
                      else if ($_GET["error"] == "stmtfailed"){
                        echo "<p>Dunia sedang tidak bersahabat.</p>";
                      }
                      else if ($_GET["error"] == "none"){
                        echo "<p>Anda telah terdaftar.</p>";
                      }
                      else{
                        echo "<p>Anda gagal terdaftar.</p>";
                      }
                    }
                     ?>

            <h2 class="text-center"><strong>Create</strong> an account.</h2>         
            <div class="form-group"><input class="form-control" type="text" name="userReal" placeholder="Name"></div>
            <div class="form-group"><input class="form-control" type="text" name="userName" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="email" name="userEmail" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"></div>
            <div class="form-group"><button name="submit" class="btn btn-primary btn-block" type="submit">Sign Up</button></div><a class="already" href="login.php">You already have an account? Login here.</a></form>



    </div>
</div>




<?php
require_once'footer.php'
 ?>
