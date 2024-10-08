<?php
abstract class Makanan {
    protected $nama;
    protected $kalori;

    public function __construct($nama, $kalori) {
        $this->nama = $nama;
        $this->kalori = $kalori;
    }

    abstract public function deskripsi(); // Metode abstrak
}
?>
