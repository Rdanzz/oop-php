<?php
class Produk {
    public $nama = "Produk A";
    private $harga = 10000;
    protected $stok = 50;

    public function getHarga() {
        return $this->harga;
    }
}

$produk = new Produk();
echo $produk->nama;
echo $produk->getHarga();
