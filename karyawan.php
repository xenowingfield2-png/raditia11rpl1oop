<?php
class Karyawan {
    protected $nama;
    protected $nik;
    protected $gajiPokok;

    public function __construct($nama, $nik, $gajiPokok) {
        $this->nama = $nama;
        $this->nik = $nik;
        $this->gajiPokok = $gajiPokok;
    }

    public function getNama() { return $this->nama; }
    public function setNama($nama) { $this->nama = $nama; }

    public function getNik() { return $this->nik; }
    public function setNik($nik) { $this->nik = $nik; }

    public function getGajiPokok() { return $this->gajiPokok; }
    public function setGajiPokok($gajiPokok) { $this->gajiPokok = $gajiPokok; }

    public function hitungTotalGaji() {
        return $this->gajiPokok;
    }
    
    public function getInfoDasar() {
        return "Nama: {$this->nama} <br> NIK: {$this->nik}<br>";
    }
}

class KaryawanTetap extends Karyawan {
    private $tunjanganKeluarga;

    public function __construct($nama, $nik, $gajiPokok, $tunjanganKeluarga) {
        parent::__construct($nama, $nik, $gajiPokok); 
        $this->tunjanganKeluarga = $tunjanganKeluarga;
    }

    // 3. POLIMORFISME (Method Overriding)
    public function hitungTotalGaji() {
        $gajiKotor = $this->gajiPokok + $this->tunjanganKeluarga;
        $pajak = $gajiKotor * 0.05; // Pajak 5%
        $gajiBersih = $gajiKotor - $pajak;
        
        return $gajiBersih;
    }
}

class KaryawanKontrak extends Karyawan {
    private $durasiKontrakBulan;
    private $bonusLembur;

    public function __construct($nama, $nik, $gajiPokok, $durasiKontrakBulan, $bonusLembur) {
        parent::__construct($nama, $nik, $gajiPokok);
        $this->durasiKontrakBulan = $durasiKontrakBulan;
        $this->bonusLembur = $bonusLembur;
    }

    public function hitungTotalGaji() {
    
        return $this->gajiPokok + $this->bonusLembur;
    }
}

$pegawaiTetap = new KaryawanTetap("Radit", "112233", 10000000, 1000000);

$pegawaiKontrak = new KaryawanKontrak("Candra", "998877", 5000000, 12, 500000);


echo "<h2>DATA KARYAWAN TETAP</h2>\n";
echo $pegawaiTetap->getInfoDasar() . "\n";
echo "Total Gaji Bersih: Rp" . number_format($pegawaiTetap->hitungTotalGaji(), 0, ',', '.') . "\n"."<br>";
echo "\n".'<br>';

echo "<h2>DATA KARYAWAN KONTRAK</h2>\n";
echo $pegawaiKontrak->getInfoDasar() . "\n";
echo "Total Gaji Bersih: Rp" . number_format($pegawaiKontrak->hitungTotalGaji(), 0, ',', '.') . "\n"."<br>";

?>