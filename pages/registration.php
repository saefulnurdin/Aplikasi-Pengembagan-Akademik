<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
		<img class="logo" src="../img/logo.png" alt="Logo">
		<h1 class="title">The Heart of Management <br> and Informatics Enginnering <br>University</h1>
		<a href="#"><button class="button button1">MASUK</button></a>
		<a href="registration.php"><button class="button button2">DAFTAR</button></a>
	</header>

	<nav>
		<ul class="nav-list">
			<li><a href="../index.php">Beranda</a></li>
			<li><a href="about.php">Tentang Kami</a></li>
			<li><a href="https://wa.link/hsa4bf">Kontak</a></li>
			<li><a href="#">Brosur</a></li>
		</ul>
	</nav>

	<main class="main-content-form">
        <section class="content-form">
            <h2 class="formulir-judul">Formulir Pendaftaran Mahasiswa Baru</h2>
            <form class="content-form" method="POST" action="register.php">
                <div class="form-group">
                    <label for="nama">Nama Lengkap*</label>
                    <input type="text" id="nama" name="tb_nama" required>
                </div>
                <div class="form-group">
                    <label for="tanggal-lahir">Tanggal Lahir*</label>
                    <input type="date" id="tanggal-lahir" name="tb_tgl_lahir" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat*</label>
                    <textarea id="alamat" name="tb_alamat" required></textarea>
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="tb_email" required>
                </div>
                <div class="form-group">
                    <label for="telepon">Nomor Telepon</label>
                    <input type="tel" id="telepon" name="tb_telepon">
                </div>
                <div class="form-group">
                    <label for="program-studi">Program Studi*</label>
                    <select id="program-studi" name="tb_studi" required>
                        <option value="">--Silahkan Pilih--</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                        <option value="Komputeriisasi Akuntansi">Komputerisasi Akuntansi</option>
                        <option value="Informatika Rekam Medis">Informatika Rekam Medis</option>
                    </select>
                </div>
                <button type="submit" class="button3" name="daftar">DAFTAR</button>
            </form>
        </section>

        <aside class="sidebar">
            <h2 class="program-studi">Program Studi</h2>
            <div class="program-studi-buttons">
                <a href="#" class="program-studi-button">Teknik Informatika</a>
                <a href="#" class="program-studi-button">Manajemen Informatika</a>
                <a href="#" class="program-studi-button">Komputerisasi Akuntansi</a>
                <a href="#" class="program-studi-button">Informatika Rekam Medis</a>

                <h3>Biaya Kuliah</h3><br>
                <p><strong>Biaya Pendaftaran</strong> Calon Mahasiswa Baru Kelas Karyawan <strong>Rp. 200.000</strong> ,-Biaya Awal Masuk/Herregistrasi Cukup <strong>Rp. 400.000,-</strong> (KTM + Daftar Ulang) <strong>*Belum Termasuk Angsuran 1</strong></p>
    
                <h3>S1 Kelas Karyawn<br>Jurusan:</h3><br>
    
                <p>1. Teknik Informatika <strong>( Biaya Kuliah Rp. 700.000/Bulan )</strong></p>
                <p>2. Manajemen Informatika <strong>( Biaya Kuliah Rp. 700.000/Bulan )</strong></p>
                <p>3. Komputerisasi Akuntansi <strong>( Biaya Kuliah Rp. 700.000/Bulan )</strong></p>
                <p>4. Informatika Rekam Medis <strong>( Biaya Kuliah Rp. 900.000/Bulan )</strong></p>
    
                <p>Pendaftaran Dapat dilakukan di Kampus <strong>STMIK PAMITRAN KARAWANG</strong> atau via Internet (Pendaftaran Online).</p><br>
            </div>
        </aside>
    </main>

    <footer>
        <p>&copy; 2024 Saeful Nurdin | All rights reserved.</p>
    </footer>
</body>
</html>