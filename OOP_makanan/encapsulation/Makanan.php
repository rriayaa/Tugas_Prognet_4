<?php
class Makanan {
    private $nama;
    private $kalori;

    public function __construct($nama, $kalori) {
        $this->nama = $nama;
        $this->kalori = $kalori;
    }

    // Getter
    public function getNama() {
        return $this->nama;
    }

    // Setter
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getKalori() {
        return $this->kalori;
    }

    public function setKalori($kalori) {
        $this->kalori = $kalori;
    }
}

$makanan = new Makanan('Salad', 150);
echo $makanan->getNama(); // Output: Salad
?>
