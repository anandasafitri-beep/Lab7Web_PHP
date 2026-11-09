<?php
function formatRupiah($angka) {
    return "Rp" . number_format($angka, 0, ",", ".");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Eksperimen 3 - Format Rupiah</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
  <h2>Eksperimen 3 - Function Format Rupiah</h2>
  <table>
    <tr><th>Angka</th><th>Hasil formatRupiah()</th></tr>
    <?php foreach ([2500, 15000, 150000, 1250000, 99999999] as $a): ?>
      <tr><td><?= $a ?></td><td><?= formatRupiah($a) ?></td></tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
