<?php
require_once "template/header.php"
?>

<?php

function rano()
{
    $godzina = date("H");
    if ($godzina < 12 && $godzina > 6) {
        return "good morning";
    } elseif ($godzina > 12 && $godzina < 18) {
        return "good afternoon";
    } elseif ($godzina > 18) {
        return "good evening";
    } else {
        return "błąd";
    }
}

?>

<div class="box p-5   text-white">
    <h1><?php echo date("F H:i");?></h1>
        <h1><?php echo rano() ?> </h1>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    
</div>
    <div class="row p-4 m-4">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>


            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
</div>



            <?php
            require_once "template/footer.php";
            ?>