<?php
function nama(){
    echo "hallo nama saya septiani";
}

    nama();

    echo "<br>";

    function pengurangan($nilai1,$nilai2){
        $hasil = $nilai1 - $nilai2;
        return $hasil;
    }
    echo(pengurangan(67,45));

    echo  "<br>";

    function perkalian($angka1,$angka2){
        $jumlah = $angka1 * $angka2;
        return $jumlah;
    }
    echo(perkalian(54,12));