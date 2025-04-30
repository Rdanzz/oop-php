<?php
class Animal {
    public function sound() {
        echo "Animal sound\n";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Woof!\n";
    }
}

$dog = new Dog();
$dog->sound();
