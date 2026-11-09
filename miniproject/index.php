<?php require __DIR__ . "/proses.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Formulir Data Mahasiswa</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
  <h2>Formulir Data Mahasiswa</h2>

  <?php if ($error): ?>
    <div class="error">
      <strong>Data belum dapat diproses:</strong>
      <ul>
        <?php foreach ($error as $pesan): ?>
          <li><?= htmlspecialchars($pesan, ENT_QUOTES, "UTF-8") ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <?php if ($data): ?>
    <div class="sukses">
      <h3>Ringkasan Data Mahasiswa</h3>
      <table>
        <tr><th>Nama</th><td><?= htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8") ?></td></tr>
        <tr><th>NIM</th><td><?= htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8") ?></td></tr>
        <tr><th>Program Studi</th><td><?= htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8") ?></td></tr>
        <tr><th>Semester</th><td><?= (int)$data["semester"] ?></td></tr>
        <tr><th>Email</th><td><?= htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8") ?></td></tr>
      </table>
    </div>
  <?php endif; ?>

  <form method="POST" action="" novalidate>
    <label>Nama
      <input type="text" name="nama" value="<?= htmlspecialchars($old['nama'], ENT_QUOTES, 'UTF-8') ?>">
    </label>
    <label>NIM
      <input type="text" name="nim" value="<?= htmlspecialchars($old['nim'], ENT_QUOTES, 'UTF-8') ?>">
    </label>
    <label>Program Studi
      <input type="text" name="prodi" value="<?= htmlspecialchars($old['prodi'], ENT_QUOTES, 'UTF-8') ?>">
    </label>
    <label>Semester
      <input type="text" name="semester" value="<?= htmlspecialchars((string)$old['semester'], ENT_QUOTES, 'UTF-8') ?>">
    </label>
    <label>Email
      <input type="text" name="email" value="<?= htmlspecialchars($old['email'], ENT_QUOTES, 'UTF-8') ?>">
    </label>
    <button type="submit">Kirim</button>
  </form>
</body>
</html>
