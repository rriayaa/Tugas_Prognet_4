<?php
class Makanan {
    protected $nama;
    
    public function __construct($nama) {
        $this->nama = $nama;
    }

    protected function tampilkanNama() {
        return "Nama makanan ini adalah {$this->nama}";
    }

    public function tampilkan() {
        return $this->tampilkanNama();
    }
}

class Roti extends Makanan {
    public function deskripsi() {
        return $this->tampilkanNama();
    }
}

$roti = new Roti('Roti Tawar');
echo $roti->deskripsi(); // Output: Nama makanan ini adalah Roti Tawar
?>
