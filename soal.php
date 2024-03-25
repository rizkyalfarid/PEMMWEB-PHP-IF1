<?php
$namaBarang = array("Mouse", "HP", "Monitor", "Printer");
$harga = array(150000, 2000000, 1500000, 2000000);
$totalHarga = 0;

for ($i = 0; $i < count($namaBarang); $i++) { 
    $totalHarga += $harga[$i]; 
}

$hasil = "<pre>
========================================================
<br>
        PROGRAM PENJUALAN BARANG
<br>
========================================================
<br>
  |  NAMA BARANG  |   HARGA   |  JUMLAH  |  TOTAL  |
<br>
========================================================
<br>
  ".$namaBarang[0]."   |   ".$harga[0]."  | 2 | ".($harga[0] * 2)." <br>
  ".$namaBarang[1]."   |   ".$harga[1]."  | 3 | ".($harga[1] * 3)." <br>
  ".$namaBarang[2]."   |   ".$harga[2]."  | 4 | ".($harga[2] * 4)." <br>
  ".$namaBarang[3]."   |   ".$harga[3]."  | 5 | ".($harga[3] * 5)." <br>
=======================================================
  <br>
  TOTAL HARGA :     $totalHarga 
</pre>";

echo $hasil;
?>
