<?php

class kendaraan
{
    public $merk;
    public function __construct($merk)
    {
        $this->merk = $merk;
    }
    public function berjalan()
    {
        return $this->merk . " sedang melaju...";
    }
}

class Mobil extends kendaraan
{
    public $jumlahPintu = 4;
    public function bukaPintu()
    {
        return "Membuka " . $this->jumlahPintu . " pintu mobil" . $this->merk;
    }
}

$mobilRPL = new Mobil("Toyota");
echo $mobilRPL->berjalan();
echo "<br>";
echo $mobilRPL->bukaPintu();