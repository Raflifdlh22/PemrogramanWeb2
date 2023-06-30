<?php

function luasLingkaran($jari){
    define("PI", 3.14);
    echo "Luas Lingkaran = " . PI * $jari * $jari;
}

function luasPErsegi($sisi){
    echo "Luas Persegi = " . $sisi * $sisi;
}
function luasSegitiga($alas, $tinggi){
    echo "Luas Segitiga = " . $alas * $tinggi / 2;
}

luasLingkaran(10);
luasPersegi(10);
luasSegitiga(10, 10);

// ?>