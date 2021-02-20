<?php
require_once('header.php');
 ?>

<div class="register-photo">
    <div class="form-container">
        <div class="image-holder">
        </div>
        <form action ="assets/php/addposts.php" method="post">
            <h2 class="text-center"><strong>Make</strong> a Post.</h2>
            <div class="form-group"><input class="form-control" type="text" name="Title" placeholder="Title"></div>
            <div class="form-group"><input class="form-control" type="text" name="Tags" placeholder="Tags"></div>
            <div class="form-group"><input class="form-control" type="text" name="Penjelasan" placeholder="Jelaskan....."></div>
            <div class="form-group"><button name="submit-post" class="btn btn-primary btn-block" type="submit">Submit</button>
            </form>
            <form action="upload.php" method='post' enctype='multipart/form-data'>
                 <input type='file' name='file'>
                 <button type='submit' name='submitImage'>Upload</button>
            </form>


    </div>
</div>

<?php
require_once('footer.php');
 ?>
