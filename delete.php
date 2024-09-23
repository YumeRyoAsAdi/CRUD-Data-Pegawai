<?php
require_once 'config.php';

$id = $_GET['id'];

$query = "DELETE FROM Tabel_Pegawai WHERE Id = '$id'";
mysqli_query($conn, $query);
echo "Data berhasil dihapus!";
header("Location: pegawai.php");
?>