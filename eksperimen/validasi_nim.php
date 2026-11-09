<?php
// Ketentuan: NIM hanya angka dan panjangnya tepat 10 digit
const PANJANG_NIM = 10;

$pesan = "";
$valid = false;
$nim = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nim = trim($_POST["nim"] ?? "");
    if ($nim === "") {
        $pesan = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim)) {
        $pesan = "NIM hanya boleh berisi angka.";
    } elseif (strlen($nim) !== PANJANG_NIM) {
        $pesan = "NIM harus tepat " . PANJANG_NIM . " digit.";
    } else {
        $valid = true;
        $pesan = "NIM valid.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Eksperimen 4 - Validasi NIM</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
  <h2>Eksperimen 4 - Validasi NIM</h2>
  <p>Ketentuan: hanya angka, panjang <?= PANJANG_NIM ?> digit.</p>
  <form method="POST">
    <label>NIM <input type="text" name="nim" value="<?= htmlspecialchars($nim, ENT_QUOTES, 'UTF-8') ?>"></label>
    <button type="submit">Periksa</button>
  </form>
  <?php if ($pesan): ?>
    <p class="<?= $valid ? 'sukses' : 'error' ?>"><?= htmlspecialchars($pesan) ?></p>
  <?php endif; ?>
</body>
</html>
