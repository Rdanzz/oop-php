<?php
class Mobil {

    public $roda;
    public $bensin;

    private $merk;
    private $warna;

    public function jalan() {
        echo "Mobil sedang berjalan\n";
    }

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function getMobil()  {
        // return "Mobilku" . " " .  $this->merk . " " . $this->warna;
        return "Mobilku $this->merk $this->warna";
    }
}

// $mobil->jalan();
$mobil = new Mobil ("Toyota", "Merah");
echo $mobil->getMobil() . "\n";

echo $bensin = "Mobil ku bensin nya Pertamax Dex\n";
echo $roda = "Roda Mobil ku 4";

