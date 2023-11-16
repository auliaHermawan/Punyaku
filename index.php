<?php
$koneksi = mysqli_connect("localhost", "root", "", "crud");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM data";
        $result = mysqli_query($koneksi, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['telepon'] . "</td>";
            echo "<td><img src='" . $row['foto'] . "' width='100' height='100'></td>";
            echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <a href="tambah.php">Tambah Data</a>
</body>
</html>
