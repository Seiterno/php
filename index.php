<?php
require_once "template/header.php"
?>

<?php
const KEY="912c622485ebcccfe6e75ebb3dc2de10";
const URL= "https://api.openweathermap.org/data/2.5/weather?q=Katowice&appid=".KEY;
$data=file_get_contents(URL);
$weather=json_decode($data,true);

function rano()
{
    $godzina = date("H");
 
    if ($godzina < 12 && $godzina >= 6) {
        return "good morning";
    } elseif ($godzina >= 12 && $godzina < 18) {
        return "good afternoon";
    } elseif ($godzina >= 18) {
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
        <div class="position-relative ">
        <div class=" border rounded border-warning border-5 position-absolute bottom-0 end-0 translate-middle-x bg-primary" ><div class="table"><?php
        function kelvin($temp){
            $celcius=$temp-273.15;
            return $celcius;
        }
        $temp=$weather['main']['temp'];
        
         echo $weather['name']."<br>";

        echo "wilgotność " .$weather['main']['humidity'];
        echo "<br>";
        echo "Temperatura " .kelvin($weather['main']['temp']). "C";
        echo "<br>";
        echo "Ciśnienie " .$weather['main']['pressure'];
        echo "<br>";
        echo "Widoczność " .$weather['visibility'] ."%";
        echo "<br>";
        echo "zachmurzenie " .$weather['weather'][0]['description'];
        echo "<br>";
        ?>
    </div>    
    </div>
        </div>
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