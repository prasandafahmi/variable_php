<?php
function local()
{
$lokal = "11";
//variabel local

echo $lokal;
//mengeluarkan isi dari variabel local
}

local();
//error dikarenakan tidak mengenal variabel yang di keluarkan,
//karena perintah ini berada di luar fungsi tempat variabel di deklarasikan
?>