<?php
namespace App;

abstract class Makanan {
    protected $nama;
    protected $levelPedas;

    public function __construct($nama, $levelPedas) {
        $this->nama = $nama;
        $this->levelPedas = $levelPedas;
    }

    abstract public function deskripsi(); // Metode abstrak
}
?>
