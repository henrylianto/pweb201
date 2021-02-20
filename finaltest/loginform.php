<?php
require_once'header.php';
session_start();

 ?>


<div class="login-clean">
<form action = "assets/php/login.php" method="post">
    <h1 style="text-align: center;font-size: 30px;">Login</h1>
    <div class="illustration"><img src="assets/img/popop.jpeg" style="width: 125px;"></div>
    <div class="form-group"><input class="form-control" type="name" name="username" placeholder="Username"></div>
    <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
    <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submitLogin" style="background: rgb(0,105,217);">Log In</button></div></form>
</div>

<?php
require_once'footer.php';
 ?>
