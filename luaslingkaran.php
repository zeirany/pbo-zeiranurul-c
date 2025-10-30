<?php

class luaslingkaran {

    public const phi = 3.14;
    public int$jari;

    public function tampil($nama = 'ban') {
        $rumus = luaslingkaran::phi * ($this->jari * $this->jari);
        echo "lingkaran {$nama} hasilnya adalah: {$rumus}";
    }

    public static function testing() {
        echo "<br/>";
        echo "ini dari static";
    }
}

$lingkaran = new luaslingkaran();
$lingkaran->jari = 12;
$lingkaran->tampil('roda');//panggil method tampil

luaslingkaran::testing();//panggil static method

