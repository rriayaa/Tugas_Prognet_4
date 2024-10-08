<?php
require 'vendor/autoload.php'; // Memanggil autoload Composer

use App\AyamBetutu;
use App\SateLilitBabi;

// Membuat objek dan mencetak deskripsinya
$AyamBetutu = new AyamBetutu('Ayam Betutu', 'Pedas');
echo $AyamBetutu->deskripsi() . PHP_EOL;

$SateLilitBabi = new SateLilitBabi('Sate Lilit Babi', 'Sedang');
echo $SateLilitBabi->deskripsi() . PHP_EOL;
?>
