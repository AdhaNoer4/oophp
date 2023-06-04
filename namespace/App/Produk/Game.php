<?php 
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
