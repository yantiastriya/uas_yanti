<?php
include_once 'login_session.php';
include_once 'koneksi.php';

$nama = $_GET['nama'];
$sql = "DELETE FROM biodata WHERE nama = '{$nama}'";
$result = mysqli_query($conn, $sql);

header('location: index2.php');
?>