<?php 
    
    if($_POST){
        $NIK=$_POST['Nik'];
        $Nama=$_POST['Nama'];
        if(empty($NIK)){
            echo "<script>alert('NIK tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($Nama)){
            echo "<script>alert('Nama tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "config.php";
            $qry_login=mysqli_query($conn,"SELECT * FROM `tabel_pegawai` WHERE Nik = '".$NIK."' and Nama = '".$Nama."'");
            $cek = mysqli_num_rows($qry_login);
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['Id_pegawai']=$dt_login['Id_pegawai'];
                $_SESSION['Nama']=$dt_login['Nama'];
                $_SESSION['status_login']=true;
                header("location: home.php");
            } else {
                echo "<script>alert('NIK dan Nama tidak benar');location.href='login.php';</script>";
            }
        }
    }
?>