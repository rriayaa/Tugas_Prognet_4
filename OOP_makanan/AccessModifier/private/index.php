<?php
class Makanan {
    private $nama;
    
    public function __construct($nama) {
        $this->nama = $nama;
    }
    
    private function tampilkanNama() {
        return "Nama makanan ini adalah {$this->nama}";
    }

    public function tampilkan() {
        return $this->tampilkanNama();
    }
}

$makanan = new Makanan('Bakso');
echo $makanan->tampilkan(); // Output: Nama makanan ini adalah Bakso
?>
