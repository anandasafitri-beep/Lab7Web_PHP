<?php
$daftar = ["Alya Putri", "Bima Saputra", "Citra Lestari", "Doni Prakoso", "Eka Wulandari", "Alya Rahma"];
$kata = trim($_GET["kata"] ?? "");
$ditemukan = [];

if ($kata !== "") {
    foreach ($daftar as $nama) {
        if (stripos($nama, $kata) !== false) {
            $ditemukan[] = $nama;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Eksperimen 2 - Cari Nama</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
  <h2>Eksperimen 2 - Cari Nama dengan GET</h2>
  <form method="GET" action="">
    <label for="kata">Cari nama:</label>
    <input id="kata" name="kata" type="text" value="<?= htmlspecialchars($kata, ENT_QUOTES, 'UTF-8') ?>">
    <button type="submit">Cari</button>
  </form>

  <?php if ($kata !== ""): ?>
    <p>Hasil pencarian untuk "<?= htmlspecialchars($kata, ENT_QUOTES, "UTF-8") ?>":</p>
    <?php if ($ditemukan): ?>
      <ol>
        <?php foreach ($ditemukan as $n): ?>
          <li><?= htmlspecialchars($n) ?></li>
        <?php endforeach; ?>
      </ol>
    <?php else: ?>
      <p>Nama tidak ditemukan.</p>
    <?php endif; ?>
  <?php endif; ?>

  <p><small>Data yang dicari: <?= htmlspecialchars(implode(", ", $daftar)) ?></small></p>
</body>
</html>
