<?php

interface HitungLuas
{
    public function HitungLuasPersegi();
    public function HitungLuasSegitiga();
    public function HitungLingkaran();
}

class LuasPersegi implements HitungLuas
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }
    public function HitungLuasPersegi()
    {
        return $this->sisi * $this->sisi;
    }
    public function HitungLingkaran()
    {
        return 0;
    }
    public function HitungLuasSegitiga()
    {
        return 0;
    }
}

class LuasSegitiga implements HitungLuas
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }
    public function HitungLuasPersegi()
    {
        return 0;
    }
    public function HitungLingkaran()
    {
        return ($this->sisi * $this->sisi) / 2;
    }
    public function HitungLuasSegitiga()
    {
        return 0;
    }
}

class LuasLingkaran implements hitungLuas
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function hitungLuasPersegi()
    {
        return 0;
    }

    public function hitungLuasSegitiga()
    {
        return 0;
    }

    public function hitungLingkaran()
    {
        return M_PI * ($this->sisi * $this->sisi);
    }
}

$persegi = new LuasPersegi(8);
$segitiga = new LuasSegitiga(12);
$lingkaran = new LuasLingkaran(21);

$LuasPersegi = $persegi->HitungLuasPersegi();
$luasSegitiga = $segitiga->HitungLuasSegitiga();
$LuasLingkaran = $lingkaran->hitungLingkaran();
