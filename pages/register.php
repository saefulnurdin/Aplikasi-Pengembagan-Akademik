<?php
// Panggil Koneksi Database
include "../config/koneksi.php";

// Jika Tombol Daftar diklik
if(isset($_POST["daftar"])){
    // Tambah Data Baru
    $daftar = mysqli_query($conn, "INSERT INTO tb_register (nama, tgl_lahir, alamat, email, no_telepon, studi) VALUES 
       ('$_POST[tb_nama]',
        '$_POST[tb_tgl_lahir]',
        '$_POST[tb_alamat]',
        '$_POST[tb_email]',
        '$_POST[tb_telepon]',
        '$_POST[tb_studi]')");

    // Jika Pendaftaran Sukses
    if ($daftar){
        echo "<script>
                 alert('Pendaftaran Sukses!');
                 document.location='receipt.php';
              </script>";        
    } else {
        echo "<script>
                 alert('Pendaftaran Gagal!');
                 document.location='registration.php';
              </script>";  
    }
}

