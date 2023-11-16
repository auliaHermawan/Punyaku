<?php
// Import koneksi ke database
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $sql = "UPDATE data SET nama='$nama', email='$email', telepon='$telepon' WHERE id='$id'";

    if (mysqli_query($koneksi, $sql)) {
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>
    