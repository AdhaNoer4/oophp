<?php 
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
