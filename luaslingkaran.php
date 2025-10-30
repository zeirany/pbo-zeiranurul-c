<?php

class luaslingkaran {

    public const phi = 3.14;
    public int $jari;

    public function __construct($isijari = 1) {
        $this->jari = $isijari;
    }

    public function tampil($nama = 'ban') {
        $rumus = luaslingkaran::phi * ($this->jari * $this->jari);
        echo "lingkaran {$nama} hasilnya adalah: {$rumus}";
    }

    public static function testing() {
        echo "<br/>";
        echo "ini dari static";
    }

    public function __destruct() {
        echo "<br/>";
        echo "udah ah cape";
    }
}

$lingkaran = new luaslingkaran(12);
//$lingkaran->jari = 12;
$lingkaran->tampil('roda');//panggil method tampil

luaslingkaran::testing();//panggil static method

