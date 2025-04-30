<?php
class Laptop {
    public $nama;
    public $prosesor;

    public function getInfo() {
        return "Laptop $this->nama dengan prosesor $this->prosesor";
    }
}

$laptop = new Laptop();
$laptop->nama = "Asus";
$laptop->prosesor = "Intel i5";
echo $laptop->getInfo();
