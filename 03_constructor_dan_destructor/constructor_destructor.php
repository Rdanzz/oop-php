<?php
class User {
    public function __construct() {
        echo "Object dibuat\n";
    }

    public function __destruct() {
        echo "Object dihancurkan\n";
    }
}

$user = new User();
