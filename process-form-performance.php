<?php

$nik = $_POST["nik"];
$foto = $_FILES["file"]["tmp_name"];
$nama = $_POST["nama"];
$statusKerja = $_POST["statusKerja"];
$posisi = $_POST["posisi"];
$tanggalPenilaian = $_POST["tanggalPenilaian"];
$responsibility = $_POST["responsibility"];
$teamwork = $_POST["teamwork"];
$timeManagement = $_POST["timeManagement"];
$total = $_POST["total"];
$grade = $_POST["grade"];

// var_dump($nik, $foto, $nama, $statusKerja, $posisi, $tanggalPenilaian, $responsibility, $timeManagement,$teamwork, $total, $grade);

$host = "localhost";
$dbname = "karyawan";
$username = "root";
$password = "";

$con = mysqli_connect(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname,
);

if(mysqli_connect_errno()){
    die("Connection Error:". mysqli_connect_error());
}

echo "Connection successful.";


?>