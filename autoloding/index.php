<?php
require_once 'App/init.php';
//instance class produk
$produk1 /* <- ini object*/ = new Komik("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100); // dikirim ke constructor
$produk2 = new Game("Mobile Legends", "Moonton", "Byte Dance", 50000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
