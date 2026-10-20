<?php
class Profesi {
   public function bekerja() {
    return "Melakukan pekerjaan umum...";
   } 
}

class Guru extends Profesi {
    public function bekerja() {
        return "Pergi ke kelas dan mengajar siswa smk.";
    }
}

class Programmer extends Profesi {
    public function bekerja() 
    {
        return "membuka vs code, mengetik kode php, dan meminum kopi.";
    }
}
$pakGuru = new Guru();
$anakRPL = new Programmer();
echo $pakGuru->bekerja();
echo "<br>";
echo $anakRPL->bekerja();
?>