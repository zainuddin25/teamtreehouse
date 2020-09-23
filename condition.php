<?php

// $tanya=readline("pilih menu yes/no ? ");

// if($tanya=="yes")
// {
//     echo "kamu memilih yes"; // Jika memilih YES maka akan keluar tulisan ini
// }elseif($tanya=="no")
// {
//     echo "kamu memilih no"; //Jika memilih NO maka akan keluar tulisan ini
// }elseif($tanya=="maybe")
// {
//     echo "kamu memilih maybe"; //Jika memilih MAYBE maka akan keluar tulisan ini
// }else{
//     echo "pilih salah satu"; //Jika tidak memilih maka akan keluar tulisan ini
// }

$menu=readline("pilih angka 1-3 ?");

switch($menu)
{
    case 1:                                                            // Jika user menginput angka 1
        echo "anda memilih angka 1";
    break;
    case 2:
        echo "anda memilih angka 2";                   // Jika user menginput angka 2
    break;
    case 3:
        echo "anda memilih angka 3";                   // Jika user menginput angka 3
    break;
    default;                                                           // Jika user tidak menginput angka yang tertera
    echo "anda tidak memilih pilihan yang benar";
}
?>
