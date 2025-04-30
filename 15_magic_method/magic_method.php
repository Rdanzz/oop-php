<?php
class Contoh {
    public function __get($name) {
        return "Properti $name tidak ditemukan";
    }

    public function __call($name, $args) {
        return "Method $name tidak ditemukan";
    }
}

$obj = new Contoh();
echo $obj->tidakAda;
echo $obj->tidakAdaMethod();
