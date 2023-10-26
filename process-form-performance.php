<?php
include_once('connection.php');

$nik = (int) $_POST["nik"];
$loc = $_FILES["file"]["tmp_name"];
$nama = $_POST["nama"];
$statusKerja = $_POST["statusKerja"];
$posisi = $_POST["posisi"];
$tanggalPenilaian = $_POST["tanggalPenilaian"];
$responsibility = $_POST["responsibility"];
$teamwork = $_POST["teamwork"];
$timeManagement = $_POST["timeManagement"];
$total = $_POST["total"];
$grade = $_POST["grade"];
$filenm = $nama . '-' . uniqid() . '.png';
move_uploaded_file($loc, 'image/' . $filenm);



$sql = "INSERT INTO performance (nik, 
                                foto, 
                                nama, 
                                status_kerja, 
                                position, 
                                tgl_penilaian, 
                                responsibility, 
                                teamwork, 
                                management_time, 
                                total, 
                                grade) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($con);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_stmt_error($con));
}

mysqli_stmt_bind_param(
    $stmt,
    "isssssdddds",
    $nik,
    $filenm,
    $nama,
    $statusKerja,
    $posisi,
    $tanggalPenilaian,
    $responsibility,
    $timeManagement,
    $teamwork,
    $total,
    $grade
);

mysqli_stmt_execute($stmt);


?>