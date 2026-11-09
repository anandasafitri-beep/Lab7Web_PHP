<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Latihan 2 - Nilai Akhir</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <h2>Latihan 2 - Variabel, Operator, dan Percabangan</h2>
  <?php
  $nama = "Siti";
  $tugas = 85;
  $uts = 78;
  $uas = 90;
  $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

  if ($nilaiAkhir >= 85) {
      $predikat = "A";
  } elseif ($nilaiAkhir >= 75) {
      $predikat = "B";
  } elseif ($nilaiAkhir >= 60) {
      $predikat = "C";
  } else {
      $predikat = "D";
  }
  echo "Nama: " . htmlspecialchars($nama) . "<br>";
  echo "Nilai akhir: " . number_format($nilaiAkhir, 2) . "<br>";
  echo "Predikat: " . $predikat;

  // Uji kombinasi nilai lain
  echo "<h3>Uji kombinasi nilai</h3>";
  $uji = [
      ["Budi",  95, 90, 92],
      ["Rina",  70, 65, 72],
      ["Dedi",  50, 55, 40],
      ["Wati",  80, 76, 79],
  ];
  echo "<table><tr><th>Nama</th><th>Tugas</th><th>UTS</th><th>UAS</th><th>Akhir</th><th>Predikat</th></tr>";
  foreach ($uji as [$n, $t, $u, $a]) {
      $akhir = ($t * 0.30) + ($u * 0.30) + ($a * 0.40);
      $p = $akhir >= 85 ? "A" : ($akhir >= 75 ? "B" : ($akhir >= 60 ? "C" : "D"));
      echo "<tr><td>" . htmlspecialchars($n) . "</td><td>$t</td><td>$u</td><td>$a</td><td>"
         . number_format($akhir, 2) . "</td><td>$p</td></tr>";
  }
  echo "</table>";
  ?>
</body>
</html>
