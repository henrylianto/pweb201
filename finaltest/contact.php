<?php
require_once('header.php')
 ?>

<div class="contact-clean">
    <form method="post">
        <div class="form-row">
            <div class="col offset-4"><img class="img-fluid" src="assets/img/logo.png" style="width: 150px;"></div>
        </div>
        <h2 class="text-center">Contact us</h2>
        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
        <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
        <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14" minlength="160" required=""></textarea></div>
        <div class="form-group"><button class="btn btn-primary" type="submit" name="submitUpload">Upload</button></div>
    </form>
</div>

<?php
require_once('footer.php')
 ?>
