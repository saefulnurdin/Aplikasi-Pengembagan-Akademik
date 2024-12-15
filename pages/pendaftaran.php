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
		<img class="logo" src="img/logo.png" alt="">
		<h1 class="title">The Heart of Management <br> and Informatics Enginnering <br>University</h1>
		<a href="#"><button class="button button1">MASUK</button></a>
		<a href="registration.php"><button class="button button2">DAFTAR</button></a>
	</header>

	<nav>
		<ul class="nav-list">
			<li><a href="index.php">Beranda</a></li>
			<li><a href="about.php">Tentang Kami</a></li>
			<li><a href="https://wa.link/hsa4bf">Kontak</a></li>
			<li><a href="#">Brosur</a></li>
		</ul>
	</nav>

	<main class="main-content-form">
        <section class="content-form">
            <h2 class="formulir-judul">Formulir Pendaftaran Mahasiswa Baru</h2>
            <form class="content-form">
                <div class="form-group">
                    <label for="nama">Nama Lengkap*</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="tanggal-lahir">Tanggal Lahir*</label>
                    <input type="date" id="tanggal-lahir" name="tanggal-lahir" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat*</label>
                    <textarea id="alamat" name="alamat" required></textarea>
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telepon">Nomor Telepon</label>
                    <input type="tel" id="telepon" name="telepon">
                </div>
                <div class="form-group">
                    <label for="program-studi">Program Studi*</label>
                    <select id="program-studi" name="program-studi" required>
                        <option value="">--Silahkan Pilih--</option>
                        <option value="ti">Teknik Informatika</option>
                        <option value="mi">Manajemen Informatika</option>
                        <option value="ka">Komputerisasi Akuntansi</option>
                        <option value="irm">Informatika Rekam Medis</option>
                    </select>
                </div>
                <button type="submit" class="button3">DAFTAR</button>
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
                <p><strong>Biaya Pendaftaran</strong> Calon Mahasiswa Baru Kelas Karyawan <strong>Rp. 200.000</strong>,-Biaya Awal Masuk/Herregistrasi Cukup <strong>Rp. 400.000,-</strong> (KTM + Daftar Ulang) <strong>*Belum Termasuk Angsuran 1</strong></p><br>
    
                <h4>S1 Kelas Karyawn</h4><br>
    
                <h4>Jurusan:</h4><br>
    
                <p>Teknik Informatika <strong>( Biaya Kuliah Rp. 700.000/Bulan )</strong></p>
                <p>Manajemen Informatika <strong>( Biaya Kuliah Rp. 700.000/Bulan )</strong></p>
                <p>Komputerisasi Akuntansi <strong>( Biaya Kuliah Rp. 700.000/Bulan )</strong></p>
                <p>Informatika Rekam Medis <strong>( Biaya Kuliah Rp. 900.000/Bulan )</strong></p><br><br>
    
                <p>Pendaftaran Dapat dilakukan di Kampus <strong>STMIK PAMITRAN KARAWANG</strong> atau via Internet (Pendaftaran Online).</p><br>
            </div>
        </aside>
    </main>

    <footer>
        <p>&copy; 2024 Saeful Nurdin. All rights reserved.</p>
    </footer>
</body>
</html>