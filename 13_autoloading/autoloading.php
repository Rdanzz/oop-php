<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

// File Produk.php assumed
// class Produk { public function tampil() { echo "Produk"; } }

$produk = new Produk();
$produk->tampil();
