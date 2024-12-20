<?php
    require_once('site.php');
    loadHeader();
    echo '<link rel="stylesheet" href="style/index.css">';
?>

<section class="container text-center my-5 col-sm-12 col-md-8 col-lg-6 col-xl-6 mx-auto">
        <h1 class="text-primary text-center fw-bold">Traffic Light Control Web</h1>
        <p class="h5 subtitle text-center fw-normal">Choose your desired mode to control the traffic light system.</p>
        <div class="d-grid gap-4 col-6 mx-auto mt-5">
            <a href="auto_mode.php" class="btn btn-lg btn-primary" role="button">AUTOMATIC MODE</a>
            <a href="setting_mode.php" class="btn btn-lg btn-success" role="button">SETTING MODE</a>
            <a href="manual_mode.php" class="btn btn-lg btn-danger" role="button">MANUAL MODE</a>
        </div>
</section>

<?php
    loadFooter();
?>