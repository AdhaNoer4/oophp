<?php
// Constant / const Nilainya tidak dapat di ubah

// cara menulis constant pada php
// 1. dengan define
// define tidak dapat digunakan didalam class, harus di simpan di luar class / global
// define('NAMA', 'Adha Noer H'); // menulis constant biasakan dengan huruf besar agar berbeda dengan variabel
// echo NAMA;

// echo "<br>";

// // 2. dengan const
// // const dapat di simpan didalam class
// const UMUR = 20;
// echo UMUR;


// class Coba
// {
//     const NAMA = "Adha NB";
// }
// echo Coba::NAMA;

// Magic Constant

echo __LINE__;
echo "<br>";

class Coba
{
    public $Bisa = __CLASS__;
}
$obj = new Coba;
echo $obj->Bisa;
