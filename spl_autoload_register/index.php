<?php
// Menentukan fungsi autoload
spl_autoload_register(function ($class_name) {
    include 'Autoload/' . $class_name . '.php'; // Menyertakan file berdasarkan nama kelas
});

// Membuat objek
$nasiGoreng = new NasiGoreng('Nasi Goreng', 350);
echo $nasiGoreng->deskripsi() . PHP_EOL; // Menggunakan PHP_EOL untuk line break

$burger = new Burger('Burger Ayam', 500);
echo $burger->deskripsi() . PHP_EOL; // Menggunakan PHP_EOL untuk line break
?>
