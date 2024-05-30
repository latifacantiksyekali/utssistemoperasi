<?php
require 'config.php';
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$fakultas = $_POST["fakultas"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO kelompoktiga (nim, nama, prodi, fakultas, email, password)
            VALUES ('$nim', '$nama',  '$prodi', '$fakultas', '$email','$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location : index.html");
} else {
    echo "Pendaftaran Gagal : ";
}
?>