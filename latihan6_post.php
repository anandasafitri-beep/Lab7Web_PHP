<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Latihan 6 - Form POST</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <h2>Latihan 6 - Form dengan Metode POST</h2>
  <form method="POST" action="">
    <label for="nama">Nama:</label>
    <input id="nama" name="nama" type="text" required>
    <label for="prodi">Program Studi:</label>
    <input id="prodi" name="prodi" type="text" required>
    <button type="submit" name="kirim">Kirim Data</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $nama = trim($_POST["nama"] ?? "");
      $prodi = trim($_POST["prodi"] ?? "");

      if ($nama === "" || $prodi === "") {
          echo "<p class='error'>Semua kolom wajib diisi.</p>";
      } else {
          echo "<div class='sukses'><h3>Data diterima</h3>";
          echo "Nama: " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "<br>";
          echo "Program Studi: " . htmlspecialchars($prodi, ENT_QUOTES, "UTF-8") . "</div>";
      }
  }
  ?>
</body>
</html>
