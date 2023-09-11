<?php
class Tablet {
    public $merk;
    public $camera;
    public $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function getInfo() {
        return "Merk: $this->merk, Kamera: $this->camera MP, Memory: $this->memory GB";
    }
}

class Handphone extends Tablet {
    public $handphone_baru;

    public function __construct($merk, $camera, $memory, $handphone_baru) {
        parent::__construct($merk, $camera, $memory);
        $this->handphone_baru = $handphone_baru;
    }

    public function beliHandphone() {
        return "Beli Handphone $this->handphone_baru dengan spesifikasi: " . $this->getInfo();
    }
}

$tablet = new Tablet('Samsung', 12, 128);
$handphone = new Handphone('iPhone', 16, 64, 'Samsung Galaxy S22');

echo $tablet->getInfo() . "<br>";
echo $handphone->beliHandphone();
