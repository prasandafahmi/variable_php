<?php
function tes()
{
static $tes = 2;
echo $tes;
$tes++;
}

echo "Nilai tes pertama<br>";
tes();
echo "<br>Nilai di tambah satu<br>";
tes();
echo "<br>Nilai di tambah satu lagi<br>";
tes();
?>