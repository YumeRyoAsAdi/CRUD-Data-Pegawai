<?php
require_once 'config.php';

$qry_tabel_pegawai = mysqli_query($conn, "SELECT p.*, j.Nama_jabatan 
FROM Tabel_Pegawai p 
JOIN Tabel_Jabatan j ON p.Id_jabatan = j.Id_jabatan");

if (!$qry_tabel_pegawai) {
  echo "Error: " . mysqli_error($conn);
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Employee List</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <?php include 'navbar.php'; ?>
  <div class="container">
    <h1>Employee List</h1>
    <table class="table">
  <div class="container">
      <thead>
        <tr>
          <th>NIK</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>No. Tlp</th>
          <th>Nama_jabatan</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $no = 0;
      while ($pegawai = mysqli_fetch_assoc($qry_tabel_pegawai)) {
        $no++; ?>
        <tr>
          <td><?php echo $pegawai['Nik'] ?></td>
          <td><?php echo $pegawai['Nama'] ?></td>
          <td><?php echo $pegawai['Alamat'] ?></td>
          <td><?php echo $pegawai['Jenis_Kelamin'] ?></td>
          <td><?php echo $pegawai['No_tlp'] ?></td>
          <td><?php echo $pegawai['Nama_jabatan'] ?></td>
          <td>
            <a href="edit.php?id=<?php echo $pegawai['Id_pegawai'] ?>" class="btn btn-primary">Edit</a>
            <a href="delete.php?id=<?php echo $pegawai['Id_pegawai'] ?>" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html> 