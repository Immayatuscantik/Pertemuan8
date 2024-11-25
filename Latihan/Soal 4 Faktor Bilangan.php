<?php

echo "Masukkan angka: ";
$angka = readline();

if (!is_numeric($angka)) {
    echo "Input anda salah, silahkan coba lagi\n";
    exit;
}

$angka = intval($angka);

echo "Faktornya adalah:\n";
for ($i = 1; $i <= $angka; $i++) {
    if ($angka % $i == 0) {
        echo "$i\n";
    }
}

?>