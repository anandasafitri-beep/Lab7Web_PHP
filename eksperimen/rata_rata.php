<?php
function hitungRataRata(float $a, float $b, float $c): float {
    return ($a + $b + $c) / 3;
}

$hasil = null;
$error = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $n = [$_POST["nilai1"] ?? "", $_POST["nilai2"] ?? "", $_POST["nilai3"] ?? ""];
    $valid = true;
    foreach ($n as $x) {
        if (!is_numeric($x) || $x < 0 || $x > 100) $valid = false;
    }
    if ($valid) {
        $hasil = hitungRataRata((float)$n[0], (float)$n[1], (float)$n[2]);
    } else {
        $error = "Semua nilai harus berupa angka 0–100.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Eksperimen 1 - Rata-rata Nilai</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
  <h2>Eksperimen 1 - Rata-rata Tiga Komponen Nilai</h2>
  <form method="POST">
    <label>Nilai Tugas <input type="text" name="nilai1" value="<?= htmlspecialchars($_POST['nilai1'] ?? '') ?>"></label>
    <label>Nilai UTS <input type="text" name="nilai2" value="<?= htmlspecialchars($_POST['nilai2'] ?? '') ?>"></label>
    <label>Nilai UAS <input type="text" name="nilai3" value="<?= htmlspecialchars($_POST['nilai3'] ?? '') ?>"></label>
    <button type="submit">Hitung</button>
  </form>
  <?php if ($error): ?>
    <p class="error"><?= htmlspecialchars($error) ?></p>
  <?php elseif ($hasil !== null): ?>
    <p class="sukses">Nilai rata-rata: <?= number_format($hasil, 2) ?></p>
  <?php endif; ?>
</body>
</html>
