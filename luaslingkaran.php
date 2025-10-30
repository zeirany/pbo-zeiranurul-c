<?php

class luaslingkaran {

    public const phi = 3.14;
    public int $jari;
}


$lingkaran = new luaslingkaran();
$lingkaran->jari = 12;

$rumus = luaslingkaran::phi * ($lingkaran->jari * $lingkaran->jari);
echo "hasilnya adalah: ".$rumus;