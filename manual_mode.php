<?php
    require_once('site.php');
    loadHeader();
?>

<section class="container text-center my-5 col-sm-12 col-md-8 col-lg-6 col-xl-6 mx-auto">
<h1 class="text-primary text-center fw-bold">Running Manual Mode</h1>
        <div class="d-grid gap-4 col-6 mx-auto mt-5">
            <a href="#" class="btn btn-lg btn-danger text-uppercase" role="button" 
            title="Tap this to switch to RED at Odd Road and GREEN at Even Road">Switch to RED at Odd Road and GREEN at Even Road</a>
            <a href="#" class="btn btn-lg btn-success text-uppercase" role="button" 
            title="Tap this to switch to RED at Even Road and GREEN at Odd Road">Switch to RED at Even Road and GREEN at Odd Road</a>
            <a href="./" class="btn btn-lg btn-info text-white" role="button">Cancel</a>
        </div>
</section>

<?php
    loadFooter();
?>