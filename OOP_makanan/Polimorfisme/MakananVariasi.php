<?php
class Makanan {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function deskripsi() {
        return "Ini adalah makanan: {$this->nama}.";
    }
}

class Sate extends Makanan {
    public function deskripsi() {
        return "Sate ini terbuat dari daging {$this->nama}.";
    }
}

class Pizza extends Makanan {
    public function deskripsi() {
        return "Pizza ini memiliki topping {$this->nama}.";
    }
}

$makanan1 = new Sate('Ayam');
$makanan2 = new Pizza('Keju dan Pepperoni');

echo $makanan1->deskripsi(); // Output: Sate ini terbuat dari daging Ayam.
echo $makanan2->deskripsi(); // Output: Pizza ini memiliki topping Keju dan Pepperoni.
?>
