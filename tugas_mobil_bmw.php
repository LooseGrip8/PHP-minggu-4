<?php
class MobilLengkap {
    public function nontonTV() {
        echo "TV dihidupkan, TV Mencari Chanel, TV Menampilkan gambar.<br>";
    }
}

class MobilBMW extends MobilLengkap {
    // MobilBMW mewarisi metode nontonTV dari kelas MobilLengkap
}

class MobilBMWBeraksi {
    public function nontonTv() {
        echo "Nonton TV di dalam Mobil BMW.<br>";
    }

    public function hidupkanMobil() {
        echo "Mobil BMW dihidupkan.<br>";
    }

    public function matikanMobil() {
        echo "Mobil BMW dimatikan.<br>";
    }

    public function ubahGigi($gigi) {
        echo "Gigi mobil BMW diubah menjadi $gigi.<br>";
    }
}

// Contoh penggunaan kelas-kelas tersebut
$bmw = new MobilBMW();
$bmw->nontonTV(); // Memanggil metode dari kelas MobilLengkap
echo "<br>";

$bmwAksi = new MobilBMWBeraksi();
$bmwAksi->nontonTv();
$bmwAksi->hidupkanMobil();
$bmwAksi->matikanMobil();
$bmwAksi->ubahGigi(3);
