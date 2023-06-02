<?php
// Parent 
class Produk
{
    //property(variabel pada class)
    public $judul, // public adalah visibility
        $penulis,
        $penerbit,
        $harga;



    //function construct(adalah method yg dijalankan otomatis setiap kita membuat instance pada setiap kelas)
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    { //variabel pada parameter berbeda dengan property di class produk
        //di terima constructor, dipakai untuk mengganti propertynya
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Method (Function pada class)
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {

        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// Inheritance(Pewarisan)
// child dari produk
class Komik extends Produk
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk()
    {                        // ini overriding
        $str = "Komik   : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// child dari Produk
class Game extends Produk
{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {   //ini overriding
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk()
    {                       // ini overriding
        $str = "Game  : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

// Object Type
class CetakInfoProduk
{
    public function cetak(Produk $produk)
    { // menerima inputan object dari class produk 
        $str = "{$produk->judul}|{$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



//instance class produk
$produk1 /* <- ini object*/ = new Komik("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100); // dikirim ke constructor
$produk2 = new Game("Mobile Legends", "Moonton", "Byte Dance", 50000, 50);

//tampilkan method info lengkap
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
