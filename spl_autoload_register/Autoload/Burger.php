<?php
class Burger extends Makanan {
    public function deskripsi() {
        return "Makanan ini adalah {$this->nama} dengan kalori {$this->kalori}.";
    }
}
?>
