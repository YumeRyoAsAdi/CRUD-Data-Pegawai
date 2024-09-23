<?php
require_once 'config.php';

if (isset($_POST['submit'])) {
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $no_tlp = $_POST['no_tlp'];
  $jabatan = $_POST['jabatan'];

  $query = "INSERT INTO Tabel_Pegawai (Nik, Nama, Alamat, Jenis_kelamin, No_tlp, Jabatan) VALUES ('$nik', '$nama', '$alamat', '$jenis_kelamin', '$no_tlp', '$jabatan')";
  mysqli_query($conn, $query);
  echo "Data berhasil ditambahkan!";
  header("Location: pegawai.php");
}
?>

<html>
<head>
  <title>Create Employee</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Create Employee</h1>
    <form action="create.php" method="post">
      <div class="form-group">
        <label for="nik">NIK</label>
        <input type="number" class="form-control" id="nik" name="nik">
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat"></textarea>
      </div>
      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="no_tlp">No. Tlp</label>
        <input type="number" class="form-control" id="no_tlp" name="no_tlp">
      </div>
      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" name="jabatan">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
</body>
</html>