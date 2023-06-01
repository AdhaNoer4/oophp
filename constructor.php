<?php  

class Produk{
    //property(variabel pada class)
        public $judul, // public adalah visibility
                $penulis ,
                $penerbit,
                $harga ;
   
    //function construct(adalah method yg dijalankan otomatis setiap kita membuat instance pada setiap kelas)
    public function __construct($judul = "judul",$penulis= "penulis",$penerbit = "penerbit",$harga= 0){ //variabel pada parameter berbeda dengan property di class produk
       //di terima constructor, dipakai untuk mengganti propertynya
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    // Method (Function pada class)
    public function getLabel(){
        return "$this->judul,$this->penulis";
    }
}
//instance class
$produk1 = new Produk("Naruto","Masashi kishimoto","Shonen Jump",30000);// dikirim ke constructor
$produk2 = new Produk("Mobile Legends","Moonton","Byte Dance",50000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();