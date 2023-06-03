<?php

// interface
// tidak boleh ada property dan implementasi method
interface InfoProduk
{
    public function getInfoProduk();
}
// Parent 
abstract class Produk // Class abstrak minimal memiliki 1 method abstract
{
    //property(variabel pada class)
    protected   $judul, // public adalah visibility
        $penulis,
        $penerbit,
        $diskon = 0, // protected hanya bisa diakses pada kelas yang sama dan child / turunannya
        $harga; //private hanya bisa diakses pada class yang sama




    //function construct(adalah method yg dijalankan otomatis setiap kita membuat instance pada setiap kelas)
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    { //variabel pada parameter berbeda dengan property di class produk
        //di terima constructor, dipakai untuk mengganti propertynya
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul) //ini adalah contoh setter
    {
        if (!is_string($judul)) {
            throw new Exception("Judul Harus String!");
        }
        $this->judul = $judul;
    }
    public function getJudul() //ini adalah contoh getter
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }



    // Method (Function pada class)
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    // method abstract
    abstract public function getInfo(); // method abstract hanya interface nya saja, implementasinya ada di turunannya


}

// Inheritance(Pewarisan)
// child dari produk
class Komik extends Produk implements InfoProduk
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfo()
    {

        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
    public function getInfoProduk()
    {                        // ini overriding
        $str = "Komik   : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// child dari Produk
class Game extends Produk implements InfoProduk
{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {   //ini overriding
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfo()
    {

        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }


    public function getInfoProduk()
    {                       // ini overriding
        $str = "Game  : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

// Object Type
class CetakInfoProduk
{
    public $daftarProduk = []; //array
    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }
    public function cetak()
    { // menerima inputan object dari class produk 
        $str = "Daftar Produk : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}



//instance class produk
$produk1 /* <- ini object*/ = new Komik("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100); // dikirim ke constructor
$produk2 = new Game("Mobile Legends", "Moonton", "Byte Dance", 50000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
