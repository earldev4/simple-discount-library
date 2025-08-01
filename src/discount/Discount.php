<?php

namespace EarlDev\PhpComposer1\Discount;

class Discount {

    public function hitungHargaAkhir($hargaAwal, $diskon): float|int {
        return $hargaAwal - ($hargaAwal * $diskon / 100);
    }

    public function hitungHargaAwal($hargaAkhir, $diskon): float|int {
        return $hargaAkhir / (1 - ($diskon / 100)); 
    }
}