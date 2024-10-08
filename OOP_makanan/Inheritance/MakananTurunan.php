<?php
class Makanan {
    public $nama;
    public $kalori;

    public function __construct($nama, $kalori) {
        $this->nama = $nama;
        $this->kalori = $kalori;
    }
}

class Burger extends Makanan {
    public function deskripsi() {
        return "Makanan ini adalah {$this->nama} dan memiliki kalori sebanyak {$this->kalori}.";
    }
}

$burger = new Burger('Burger Keju', 450);
echo $burger->deskripsi(); // Output: Makanan ini adalah Burger Keju dan memiliki kalori sebanyak 450.
?>
