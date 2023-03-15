<?php 

$jari = 4.2;
$tinggi = 5.4;
$panjang = 8.9;
$lebar = 14.7;
$sisi = 7.9;

$alas = $panjang * $lebar;
$hasil = ($alas * $tinggi)/3 ;

printf("Jadi, Bangun ruang limas alas persegi panjang adalah %.3f m3", $hasil);
?>