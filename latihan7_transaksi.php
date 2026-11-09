<?php
$hasil = null;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $barang = trim($_POST["barang"] ?? "");
    $hargaInput = $_POST["harga"] ?? "";
    $jumlahInput = $_POST["jumlah"] ?? "";

    if ($barang === "" || !is_numeric($hargaInput) ||
        !ctype_digit((string)$jumlahInput) ||
        (float)$hargaInput < 0 || (int)$jumlahInput < 1) {
        $error = "Periksa kembali nama barang, harga, dan jumlah.";
    } else {
        $harga = (float)$hargaInput;
        $jumlah = (int)$jumlahInput;
        $subtotal = $harga * $jumlah;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Latihan 7 - Transaksi</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <h2>Latihan 7 - Pengolahan Data Sederhana</h2>
  <form method="POST" novalidate>
    <label>Nama barang <input name="barang" value="<?= htmlspecialchars($_POST['barang'] ?? '') ?>"></label>
    <label>Harga <input name="harga" type="number" min="0" step="0.01" value="<?= htmlspecialchars($_POST['harga'] ?? '') ?>"></label>
    <label>Jumlah <input name="jumlah" type="number" min="1" step="1" value="<?= htmlspecialchars($_POST['jumlah'] ?? '') ?>"></label>
    <button type="submit">Hitung</button>
  </form>
  <?php
  if (isset($error)) {
      echo "<p class='error'>" . htmlspecialchars($error) . "</p>";
  } elseif (isset($subtotal)) {
      echo "<div class='sukses'>";
      echo "<p>Barang: " . htmlspecialchars($barang) . "</p>";
      echo "<p>Subtotal: Rp" . number_format($subtotal, 0, ",", ".") . "</p>";
      echo "</div>";
  }
  ?>
</body>
</html>
