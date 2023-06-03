<?php
/* Static Keyword
    - Member yg terikat dengan class, bukan dengan Object
    - Nilai static akan selalu tetap, meskipun object di-instansiasi berulang kali
    - Membuat kode Menjadi Procedural
    - Biasanya digunakan untuk membuat fungsi bantuan / Helper
    - Atau digunakan di class-class utility pada Framework */

// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "Halo " . self::$angka++ . " Kali."; // Self:: utk mengambil property. pengganti $this->
//     }
// }
// // Static keyword pada property dan method tidak butuh instansiasi
// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh
{
    public static $angka = 1;

    public function halo()
    {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}
// Nilai static akan selalu tetap meskipun object di-instansiasi berulang kali
$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
