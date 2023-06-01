<?php  

class Produk{
    //property(variabel pada class)
        public $judul = "judul", // public adalah visibility
                $penulis = "penulis",
                $penerbit = "penerbit",
                $harga = 0;

    // Method (Function pada class)
    public function getLabel(){
        return "$this->judul,$this->penulis";
    }
}

//object
// $produk1 = new Produk(); // new produk() adalah instance dari class produk
// menimpa property
// $produk1->judul ="Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul ="GTA V";
// $produk2->tambahproperty = "hahah"; // penulisan property harus sama, jika berbeda property baru akan dibuat
// var_dump($produk2);

$produk3 = new Produk();
$produk3 -> judul = "Naruto";
$produk3 -> penulis = "Masashi Kishimoto";
$produk3 -> penerbit = "Shonen Jump";
$produk3 -> harga = 30000;

$produk4 = new Produk();
$produk4 -> judul ="Mobile Legends";
$produk4 -> penulis ="Moonton";
$produk4 -> penerbit ="Byte Dance";
$produk4 -> harga ="50000";

echo "Komik :". $produk3->getLabel();
echo "<br>";
echo "Game :". $produk4->getLabel();