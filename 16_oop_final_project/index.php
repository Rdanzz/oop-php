<?php
class Produk {
    public $nama, $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function info() {
        return "$this->nama - Rp$this->harga";
    }
}

$produk1 = new Produk("Laptop", 10000000);
$produk2 = new Produk("Mouse", 200000);

echo $produk1->info() . "\n";
echo $produk2->info();
