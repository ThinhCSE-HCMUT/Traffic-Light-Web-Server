<?php
    require_once('site.php');
    loadHeader();
    // echo '<link rel="stylesheet" href="style/index.css">';
?>

<section class="container text-center my-5 col-sm-12 col-md-8 col-lg-6 col-xl-6 mx-auto">
        <h1 class="text-primary text-center fw-bold">Running Setting Mode</h1>
        <div class="d-grid gap-4 col-6 mx-auto mt-3">
            <div class="input-group input-group-lg d-flex">
                <label class="input-group-text text-uppercase text-white bg-danger col-8 justify-content-center" for="Red Time">Timer Red Led</label>
                <input class="form-control col-4 text-center text-danger" type="text" value="10s" aria-label="readonly input example" readonly>
            </div>
            <div class="input-group input-group-lg d-flex">
                <label class="input-group-text text-uppercase text-white bg-success col-8 justify-content-center" for="Green Time">Timer Green Led</label>
                <input class="form-control col-4 text-center text-success" type="text" value="8s" aria-label="readonly input example" readonly>
            </div>
            <div class="input-group input-group-lg d-flex">
                <label class="input-group-text text-uppercase text-white bg-warning col-8 justify-content-center" for="Yellow Time">Timer Yellow Led</label>
                <input class="form-control col-4 text-center text-warning" type="text" value="2s" aria-label="readonly input example" readonly>
            </div>
            <a href="#" class="btn btn-rsv btn-lg btn-primary" role="button" title="Tap this to switch LED modifying">Switch LED Modifying</a>
            <a href="#" class="btn btn-rsv btn-lg btn-primary" role="button" title="Tap this to increase time">Increase Time</a>
            <a href="#" class="btn btn-rsv btn-lg btn-primary" role="button" title="Tap this to decrease time">Decrease Time</a>
            <a href="#" class="btn btn-lg btn-primary" role="button" title="Tap this to set time">Set Time</a>
            <a href="./" class="btn btn-lg btn-info text-white" role="button">Cancel</a>
        </div>
</section>

<?php
    loadFooter();
?>