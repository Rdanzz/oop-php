<?php
interface Kendaraan {
    public function jalan();
}

class Motor implements Kendaraan {
    public function jalan() {
        echo "Motor berjalan\n";
    }
}

$motor = new Motor();
$motor->jalan();
