<?php
    require_once('site.php');
    loadHeader();
    // echo '<link rel="stylesheet" href="style/index.css">';
?>

<section class="container text-center my-5 col-sm-12 col-md-8 col-lg-6 col-xl-6 mx-auto">
    <h1 class="text-primary text-center fw-bold">Running Setting Mode</h1>
    <div id="label-group" class="d-grid gap-4 col-6 mx-auto mt-3">
        <div class="input-group input-group-lg d-flex" id="red-label">
            <label class="input-group-text text-uppercase text-white bg-danger col-8 justify-content-center" for="Red Time">Timer Red Led</label>
            <input class="form-control col-4 text-center text-danger" type="text" value="10s" aria-label="readonly input example" readonly>
        </div>
        <div class="input-group input-group-lg d-flex" id="green-label">
            <label  class="input-group-text text-uppercase text-white bg-success col-8 justify-content-center" for="Green Time">Timer Green Led</label>
            <input class="form-control col-4 text-center text-success" type="text" value="8s" aria-label="readonly input example" readonly>
        </div>
        <div class="input-group input-group-lg d-flex" id="yellow-label">
            <label class="input-group-text text-uppercase text-white bg-warning col-8 justify-content-center" for="Yellow Time">Timer Yellow Led</label>
            <input class="form-control col-4 text-center text-warning" type="text" value="2s" aria-label="readonly input example" readonly>
        </div>
        <a id="switch-btn" href="#" class="btn btn-rsv btn-lg btn-primary" role="button" title="Tap this to switch LED modifying">Switch LED Modifying</a>
        <a href="#" class="btn btn-rsv btn-lg btn-primary" role="button" title="Tap this to increase time">Increase Time</a>
        <a href="#" class="btn btn-rsv btn-lg btn-primary" role="button" title="Tap this to decrease time">Decrease Time</a>
        <a href="#" class="btn btn-lg btn-primary" role="button" title="Tap this to set time">Set Time</a>
        <a href="./" class="btn btn-lg btn-info text-white" role="button">Cancel</a>
    </div>
</section>

<script>
    let clickCount = 0; // Counter for the number of clicks

    const switchBtn = document.getElementById('switch-btn');
    const redLabel = document.getElementById('red-label');
    const greenLabel = document.getElementById('green-label');
    const yellowLabel = document.getElementById('yellow-label');

    switchBtn.addEventListener('click', () => {
        clickCount = (clickCount + 1) % 3; // Cycle through 0, 1, 2
        resetScale(); // Reset all scales to default

        if (clickCount === 0) {
            redLabel.style.transform = 'scale(1.2)';
        } else if (clickCount === 1) {
            greenLabel.style.transform = 'scale(1.2)';
        } else if (clickCount === 2) {
            yellowLabel.style.transform = 'scale(1.2)';
        }
    });

    // Reset scale for all labels
    function resetScale() {
        redLabel.style.transform = 'scale(1)';
        greenLabel.style.transform = 'scale(1)';
        yellowLabel.style.transform = 'scale(1)';
    }
</script>


<?php
    loadFooter();
?>