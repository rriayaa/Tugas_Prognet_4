<?php
// index.php
require 'Roti.php'; // Mengimpor kelas Roti

$roti = new Roti('Tepung Terigu');
echo $roti->tampilkanNama(); // Output: Makanan ini adalah Tepung Terigu.
echo "\n"; // Baris baru
echo $roti->deskripsi(); // Output: Roti ini terbuat dari bahan Tepung Terigu.
?>
