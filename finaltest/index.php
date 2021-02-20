<?php
include_once'header.php';
session_start();
 ?>

<main>
    <div id="section_title">
        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class="col">
                    <h4 id="section_title">Hot Posts</h4>
                </div>
                <div class="col flex-row align-self-start">
                    <div class="dropdown d-lg-flex justify-content-lg-end"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true" id="button-css" type="button" style="margin-bottom: 15px;">Sort By</button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">New</a><a class="dropdown-item" href="#">Hot Posts</a><a class="dropdown-item" href="#">Most Liked</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</section>

<?php
include_once'footer.php';
 ?>
