<h1>PROGRAM BATAGOR</h1>
<table border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>Jumlah</th>
    <th>Batagor</th>
    <th>Cilok</th>
    <th>Cipungs</th>
  </tr>
  <?php for($i = 1; $i <= 10; $i++) : ?>
  <tr style="text-align : center;">
    <td><?php echo $i ?></td>
    <td><?php echo 2500 * $i  ?></td>
    <td><?php echo 3500  * $i?></td>
    <td><?php echo 1500 * $i ?></td>
  </tr>
  <?php endfor; ?>
</table>
