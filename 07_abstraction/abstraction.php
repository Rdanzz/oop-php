<?php
abstract class Kendaraan {
    abstract public function jalan();
}

class Sepeda extends Kendaraan {
    public function jalan() {
        echo "Sepeda dikayuh\n";
    }
}

$sepeda = new Sepeda();
$sepeda->jalan();
