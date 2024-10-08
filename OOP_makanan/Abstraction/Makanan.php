<?php
abstract class Makanan {
    protected $nama;
    protected $kalori;

    public function __construct($nama, $kalori) {
        $this->nama = $nama;
        $this->kalori = $kalori;
    }

    // Abstraksi: Metode ini harus diimplementasikan di kelas turunannya
    abstract public function deskripsi();
}

class NasiGoreng extends Makanan {
    public function deskripsi() {
        return "Makanan ini adalah {$this->nama} dengan kalori {$this->kalori}.";
    }
}

$makanan = new NasiGoreng('Nasi Goreng', 350);
echo $makanan->deskripsi();
?>
