<?php
$nama = trim($_POST["nama"] ?? "");
$kota = trim($_POST["kota"] ?? "");
$dikirim = $_SERVER["REQUEST_METHOD"] === "POST";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Eksperimen 5 - Tombol Reset</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
  <h2>Eksperimen 5 - Tombol Reset</h2>
  <form method="POST" action="">
    <label>Nama <input type="text" name="nama" value="<?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?>"></label>
    <label>Kota <input type="text" name="kota" value="<?= htmlspecialchars($kota, ENT_QUOTES, 'UTF-8') ?>"></label>
    <button type="submit">Kirim</button>
    <button type="reset">Reset</button>
    <a href="reset_form.php">Muat ulang dari server</a>
  </form>

  <?php if ($dikirim): ?>
    <p class="sukses">Server menerima: <?= htmlspecialchars($nama) ?> / <?= htmlspecialchars($kota) ?></p>
  <?php endif; ?>

  <p><small>
    Tombol Reset hanya mengembalikan isian ke nilai awal di browser tanpa mengirim apa pun ke server.
    Karena form ini mengisi ulang kolom dengan data hasil POST, Reset mengembalikannya ke nilai tersebut,
    bukan mengosongkannya. Untuk mengosongkan sepenuhnya, halaman perlu diminta ulang ke server (tautan di atas).
  </small></p>
</body>
</html>
