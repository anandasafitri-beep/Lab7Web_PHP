<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Latihan 3 - Array</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <h2>Latihan 3 - Perulangan dan Array</h2>
  <?php
  $mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita"];
  echo "<h3>Daftar Mahasiswa</h3><ol>";
  foreach ($mahasiswa as $nama) {
      echo "<li>" . htmlspecialchars($nama) . "</li>";
  }
  echo "</ol>";
  echo "<p>Jumlah mahasiswa: " . count($mahasiswa) . "</p>";
  ?>
</body>
</html>
