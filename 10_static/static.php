<?php
class Kalkulator {
    public static $pi = 3.14;

    public static function luasLingkaran($r) {
        return self::$pi * $r * $r;
    }
}

echo Kalkulator::luasLingkaran(7);
