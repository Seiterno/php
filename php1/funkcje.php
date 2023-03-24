<?php
//deklaracja funkcji
//pokazTekst-nazwa funkcji
// function pokazTekst(){
//     echo "tekst wewnątrz funkcji   ";
//     echo"<br>";
// }
// // pokazTekst();
// // pokazTekst();
// function uzytkownik($imie){

// echo "to jest $imie";
// echo "<br>";
// }
// uzytkownik("Jan");
// uzytkownik("Dawid");
// uzytkownik("Beata");
// function dodaj($a,$b){
// echo $a+$b;
// echo "<br>";
// }
// dodaj(2,5);
// dodaj(7,888);
// dodaj(4,2);
function mnozenie($a,$b,$c){
    echo $a*$b*$c;
    echo "<br>";

}
mnozenie(1,9,8);
mnozenie(8,5,4);
function pole($a,$h){
    echo $a*$h/2;
    echo "<br>";
}
pole(6,3);
pole(12,5);
function kelvin($k){
    echo $k-273.15;  
    echo "<br>";


}
kelvin(300);

function on($imie,$nazwisko,$city){
    echo "To jest $imie $nazwisko. Jego miasto to $city.";
    echo "<br>";
}
on("Jan","Kowalski","Ełk");


?>