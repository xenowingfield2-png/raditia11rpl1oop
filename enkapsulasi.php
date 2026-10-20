<?php
class Siswa {
    private $nama;
    private $nilaiPBO;

    public function setData ($namaBaru, $nilaiBaru){
$this->nama = $namaBaru;
if($nilaiBaru <= 100) {
    $this->nilaiPBO = $nilaiBaru;
} else {
    }
    }
    public function getInfo() {

    return "Siswa: " . $this->nama . ", Nilai PBO: " . $this->nilaiPBO;

    }
    }

    $siswa1 = new Siswa();
    $siswa1->setData("Budi", 85);
    echo $siswa1->getInfo();
    ?>