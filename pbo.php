<?php

class Animal {
    public $nama;
    public $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis . ".";
    }
}

class Cat extends Animal {
    public function getInfo() {
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis . ". " . ucfirst($this->jenis) ." adalah hewan yang suka bermain dan bersih.";
    }
}

class Dog extends Animal {
    public function getInfo() {
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis . ". " . ucfirst($this->jenis) ." adalah hewan yang setia dan cerdas.";
    }
}

// objek class Animal
$animal = new Animal("Harimau", "karnivora");
echo $animal->getInfo() . "\n <br>";

// objek class Cat
$cat = new Cat("Kitty", "kucing");
echo $cat->getInfo() . "\n <br>";

// objek class Dog
$dog = new Dog("Buddy", "anjing");
echo $dog->getInfo() . "\n";

?>