<?php
// Panggil Koneksi Database
include "../config/koneksi.php";

// Ambil data terbaru dari database
$result = mysqli_query($conn, "SELECT * FROM tb_register ORDER BY id_register DESC LIMIT 1");
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pendaftaran</title>
    <link rel="stylesheet" href="../css/receipt.css">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
    <div class="container" id="struk-container">
        <div class="header"> 
            <img src="../img/logo.png" alt="Logo Kampus"> 
            <div class="text"> 
                <h1>STMIK Pamitran</h1> 
                <h3>Struk Penerimaan Mahasiswa Baru</h3>
            </div>
        </div>
        <hr>
        <table>
            <tr>
                <td><strong>Data Mahasiswa</strong></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?=$data['nama']?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?=$data['tgl_lahir']?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?=$data['alamat']?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?=$data['email']?></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><?=$data['no_telepon']?></td>
            </tr>
            <tr>
                <td>Studi</td>
                <td>:</td>
                <td><?=$data['studi']?></td>
            </tr>
            <tr>
                <td><strong> Akun Login PMB </strong></td>
            </tr>
            <tr>
                <td>Virtual Account BNI</td>
                <td>:</td>
                <td>98841xxxxxxxxxxx</td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td>20250124</td>
            </tr>
            <tr>
                <td>password</td>
                <td>:</td>
                <td><?=$data['no_telepon']?></td>
            </tr>
        </table>
        <hr>
        Ketentuan :
        <ol>
            <li>Silahkan melakukan pembayaran ke no Virtual Account BNI di atas sebesar RP. 150.000</li>
            <li>Pembayaran dapat di lakukan melalui ATM, Internet Banking, Setor Tunai. Ke No Vitrual Account BNI diatas </li>
            <li>Akun login aktif setelah 1 jam pembayaran</li>
            <li>Setelah akun aktif silahkan isi data melaui link di atas dengan user dan password di atas</li>
            <!-- <li>Calon mahasiswa mengisi asal sekolah, jurusan sekolah, dan pilhi program studi yang diminati</li>
            <li>Selanjutnya melakukan ujian</li> -->
        </ol>
            <button type="button" class="button1" id="download">Cetak</button>
            <a href="registration.php"><button class="button2" class="kembali">Kembali</button></a>
    </div>

    <!-- JavaScript -->
     <script src="../js/script.js"></script>
</body>
</html>
