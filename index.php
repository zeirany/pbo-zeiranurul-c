<?php

require_once('./luaslingkaran.php'); //cara panggil file

use App\Math\luaslingkaran; //panggil class

$lingkaran = new luaslingkaran(12);
//$lingkaran->jari = 12;
$lingkaran->tampil('roda');//panggil method tampil

luaslingkaran::testing();//panggil static method
