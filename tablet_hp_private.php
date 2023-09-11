<?php
class Tablet {
    private $merk;
    private $camera;
    private $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    private function getInfo() {
        return "Merk: $this->merk, Kamera: $this->camera MP, Memory: $this->memory GB";
    }

    public function publicGetInfo() {
        return $this->getInfo();
    }
}

class Handphone extends Tablet {
    public $handphone_baru;

    public function __construct($merk, $camera, $memory, $handphone_baru) {
        parent::__construct($merk, $camera, $memory);
        $this->handphone_baru = $handphone_baru;
    }

    public function beliHandphone() {
        // Tidak dapat mengakses $this->getInfo() langsung dari sini karena getInfo() adalah private.
        return "Beli Handphone $this->handphone_baru dengan spesifikasi: " . $this->publicGetInfo();
    }
}

$tablet = new Tablet('Samsung', 12, 128);
$handphone = new Handphone('iPhone', 16, 64, 'Samsung Galaxy S22');

// Kode ini akan menghasilkan kesalahan, karena metode getInfo() adalah private.
// echo $tablet->getInfo() . "<br>";

// Akses melalui public method pada Handphone
echo $handphone->beliHandphone();
