<?php  

class Produk{
    //property(variabel pada class)
        public $judul, // public adalah visibility
                $penulis ,
                $penerbit,
                $harga,
                $jmlHalaman,
                $waktuMain,
                $tipe ;
                

   
    //function construct(adalah method yg dijalankan otomatis setiap kita membuat instance pada setiap kelas)
    public function __construct($judul = "judul",$penulis= "penulis",$penerbit = "penerbit",$harga= 0,$jmlHalaman=0,$waktuMain=0,$tipe){ //variabel pada parameter berbeda dengan property di class produk
       //di terima constructor, dipakai untuk mengganti propertynya
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;

    }

    // Method (Function pada class)
    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    }

    public function getInfoLengkap(){
        // Komik    : Naruto | Masashi kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->tipe}   : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
       // pengkondisisan = 
        if($this->tipe == "komik"){// jika tipe produknya komik 
            $str .= " - {$this->jmlHalaman} Halaman.";//maka tambahkan jml Halaman pada string/$str
        } else if($this->tipe == "game"){// jika tipe produknya game
            $str .= " ~ {$this->waktuMain} Jam.";// maka tambahkan waktu main pada string/$str
        }
        return $str;
    }
}

// Object Type
class CetakInfoProduk{
    public function cetak(Produk $produk){// menerima inputan object dari class produk 
        $str = "{$produk->judul}|{$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



//instance class produk
$produk1 /* <- ini object*/ = new Produk("Naruto","Masashi kishimoto","Shonen Jump",30000,100, 0,"komik");// dikirim ke constructor
$produk2 = new Produk("Mobile Legends","Moonton","Byte Dance",50000,0,50,"game");

//tampilkan method info lengkap
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();