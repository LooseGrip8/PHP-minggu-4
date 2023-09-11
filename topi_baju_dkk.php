<?php

class ItemProduk {
    protected $ukuran;
    protected $warna;
    protected $nama;

    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getUkuran() {
        return $this->ukuran;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Topi extends ItemProduk {
    protected $model;

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }
}

class Celana extends ItemProduk {
    protected $tipe;
    protected $model;

    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getTipe() {
        return $this->tipe;
    }

    public function getModel() {
        return $this->model;
    }
}

class Baju extends ItemProduk {
    protected $tipe;

    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    public function getTipe() {
        return $this->tipe;
    }
}

// Contoh penggunaan
$topi = new Topi();
$topi->setUkuran('L');
$topi->setWarna('Merah');
$topi->setNama('Topi Baseball');
$topi->setModel('Snapback');

$celana = new Celana();
$celana->setUkuran('M');
$celana->setWarna('Biru');
$celana->setNama('Celana Jeans');
$celana->setTipe('Slim Fit');
$celana->setModel('1234');

$baju = new Baju();
$baju->setUkuran('XL');
$baju->setWarna('Putih');
$baju->setNama('Kemeja Formal');
$baju->setTipe('Lengan Panjang');

// Menampilkan informasi produk
echo "Topi: {$topi->getNama()}, Model: {$topi->getModel()}, Ukuran: {$topi->getUkuran()}, Warna: {$topi->getWarna()}<br>";
echo "Celana: {$celana->getNama()}, Tipe: {$celana->getTipe()}, Model: {$celana->getModel()}, Ukuran: {$celana->getUkuran()}, Warna: {$celana->getWarna()}<br>";
echo "Baju: {$baju->getNama()}, Tipe: {$baju->getTipe()}, Ukuran: {$baju->getUkuran()}, Warna: {$baju->getWarna()}<br>";
