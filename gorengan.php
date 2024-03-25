<?php 
  $gorengan = ["Jumlah","Batagor", "Cilok", "Kupat Tahu", "Cipungs"];
  $harga = [2500, 3500, 4000, 4500];
?>
<h1>PROGRAM GORENGAN🔥</h1>
<table border="2" cellspacing="2" cellpadding="10">
  <tr>
    <?php for($i = 0 ; $i <= count($gorengan) - 1; $i++) : ?>
    <th><?php echo $gorengan[$i];?></th>
    <?php endfor; ?>
  </tr>
  <?php for($j = 1; $j <= 10; $j++) : ?>
  <tr>
      <td><?php echo $j ?></td>
      <td><?php echo 2500 * $j ?></td>
      <td><?php echo 3500 * $j ?></td>
      <td><?php echo 4500 * $j ?></td>
      <td><?php echo 5000 * $j ?></td>
  </tr>
  <?php endfor; ?>
</table>