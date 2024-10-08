<?php
class Makanan {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function tampilkanNama() {
        return "Makanan ini adalah {$this->nama}";
    }
}

$makanan = new Makanan('Sate Ayam');
echo $makanan->tampilkanNama(); // Output: Makanan ini adalah Sate Ayam
?>
