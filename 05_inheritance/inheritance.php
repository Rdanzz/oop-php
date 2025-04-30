<?php
class Hewan {
    public function suara() {
        echo "Hewan bersuara\n";
    }
}

class Kucing extends Hewan {
    public function suara() {
        echo "Meong\n";
    }
}

$kucing = new Kucing();
$kucing->suara();
