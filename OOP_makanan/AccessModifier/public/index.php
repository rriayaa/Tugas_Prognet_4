<?php
class Makanan {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function tampilkanNama() {
        return "Nama makanan ini adalah {$this->nama}";
    }
}

$makanan = new Makanan('Pizza');
echo $makanan->tampilkanNama(); // Output: Nama makanan ini adalah Pizza
?>
