<?php
interface Kendaraan {
    public function jalan();
}

class Mobil implements Kendaraan {
    public function jalan() {
        echo "Mobil jalan\n";
    }
}

class Sepeda implements Kendaraan {
    public function jalan() {
        echo "Sepeda jalan\n";
    }
}

function jalankan(Kendaraan $kendaraan) {
    $kendaraan->jalan();
}

jalankan(new Mobil());
jalankan(new Sepeda());
