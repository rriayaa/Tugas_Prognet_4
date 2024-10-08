<?php
namespace App;

class SateLilitBabi extends Makanan {
    public function deskripsi() {
        return "Makanan ini adalah {$this->nama} dengan level pedas {$this->levelPedas}.";
    }
}
?>
