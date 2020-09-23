<?php

// Buat Function askName
// Parameter $nama
//  askName("Zainuddin"); // Namamu Adalah Zainuddin

function askName($nama)
{
    $format_nama=ucwords(strtolower($nama));
    echo "By :  $format_nama";
}
// askName("Muhammad Zainuddin Basyar");


// strtolower = huruf kecil
// strtoupper = huruf besar
// ucwords = Setiap kata terdapat huruf kapital


// (\"contoh\")untuk menambah ikon double code dalam isi echo (echo hallo dunia \"haai\" dunia) = hallo dunia "haai" dunia

// $nama="inggris";
// echo "Negaranya $nama  mata uangnya \$  : dolar "
// "contoh" double code ( " " )
// 'contoh' single code ( ' ' )
// . single line ( . )

//  Php tidak memperdulika Spasi
// = variable
// == logika
// ===  logika tipe data harus sama
// var_dump(true==true); // true
// var_dump(true===true); // true
// var_dump(1=="1"); // True





?>