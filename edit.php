<?php
// Import koneksi ke database
require_once 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM data WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="edit-style.css">
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form method="post" action="proses_edit.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br><br>
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
        <label>Telepon:</label>
        <input type="text" name="telepon" value="<?php echo $row['telepon']; ?>"><br><br>
        <label>Foto :</label>
        <input type="file" name="foto" value="<?php echo $row['foto']; ?>"><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
