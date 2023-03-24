<?php
$info="   to jest jan      ";

$duzelitery=strtoupper($info);
$bezspacji=trim($info);

$dlugitekst="lorem ipsum costam";
$wycinek=substr($dlugitekst,6,6);
//echo $wycinek;
//konkatenacja
echo $wycinek.$bezspacji;
$imie="jan";
$nazwisko="kowalski";
$city="sosnowiec";
$dlugiwynik="To jest".$imie." ". $nazwisko ."miasto ".$city   ;
    echo $dlugiwynik;
    $nowszywynik="to jest $imie $nazwisko. miasto to $city";
    echo $nowszywynik;
?>