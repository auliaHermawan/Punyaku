<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" type="text/css" href="add-style.css">
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="telepon">Telepon:</label>
    <input type="text" name="telepon" id="telepon" required>
    <br>
    <label for="foto">Foto Profil:</label>
    <input type="file" name="foto" id="foto" accept="image/*">
    <br>
    <input type="submit" value="Simpan">
</form>
    <br>
<div class="center-button">
    <a href="index.php">Kembali</a>
</div>
<form action="proses_tambah.php" method="post" enctype="multipart/form-data">

</body>
</html>
