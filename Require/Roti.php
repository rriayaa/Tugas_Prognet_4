<?php
// Roti.php
require 'Makanan.php'; // Mengimpor kelas Makanan

class Roti extends Makanan {
    public function deskripsi() {
        return "Roti ini terbuat dari bahan {$this->nama}.";
    }
}
?>
