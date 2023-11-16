<?php
// Import koneksi ke database
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $foto = file_get_contents($_FILES['foto']['
      ']); // Mengambil data gambar

    // Check if the database connection exists
    if ($koneksi) {
        $sql = "INSERT INTO data (nama, email, telepon, foto) VALUES (?, ?, ?, ?)";

        $stmt = mysqli_prepare($koneksi, $sql);

        // Check if the statement was prepared successfully
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssb", $nama, $email, $telepon, $foto);

            if (mysqli_stmt_execute($stmt)) {
                header("location: index.php");
            } else {
                echo "Error executing statement: " . mysqli_error($koneksi);
            }
        } else {
            echo "Error preparing statement: " . mysqli_error($koneksi);
        }
    } else {
        echo "Database connection is not available.";
    }
}
?>
