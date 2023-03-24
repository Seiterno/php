<?php

declare(strict_types=1);
// $bool = false;
// if ($bool==true){
//     echo "bool jest równy true";
//     echo "<br>"
// }
// else{
//     echo "bool to false";
//     echo "<br>"
// }
// $rola="intruz";
// if($rola=="admin"){
//     echo "witamy admin";

// }
// elseif($rola=="mod"){
//     echo"witamy moda";

// }
// elseif($rola=="user"){
//     echo"witamy uzytkownika";
// }
// else{
//     echo"błąd";
// }


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
<h1><?php echo rano() ?> </h1>
