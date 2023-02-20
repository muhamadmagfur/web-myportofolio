<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Portofolio</title>
	<!-- CSS Manual -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
</head>
<body>
	<!-- Header -->
	<header>
		<div class="logo">
			<a href="beranda.php"><img src="../images/logolspbsi1.png" alt="logo" width="110px" height="30px"></a>
		</div>
		<div class="title">My Portofolio</div>
	</header>

	<!-- Navigasi -->
	<div class="navbar">
		<ul>
			<li><a href="beranda.php">beranda</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="portopolio.php">Portofolio</a></li>
			<li><a href="hubungi.php">Hubungi</a></li>
		</ul>		
	</div>

	<div style="display: flex;">
		<!-- Main Content -->
	    <div class="main">
			<section class="hub">
				<div class="box">
					<br><br>
					<center><h3 style="color: white;">HUBUNGI</h3></center>
					<br>

					<center><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">HUBUNGI</button></center>
					<br><br><br>

					<!-- Modal Tambah Contact -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
								<h1 class="modal-title fs-5" id="exampleModalLabel">HUBUNGI</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form action="" method="POST">
										<div class="form-group">
											<label for="nama" class="col-form-label">Nama</label>
											<input type="nama" class="form-control" name="nama" id="nama" required>
											<label for="telp" class="col-form-label">Telp</label>
											<input type="number" class="form-control" name="telp" id="telp" required>
											<label for="email" class="col-form-label">Email</label>
											<input type="email" class="form-control" name="email" id="email" required>
											<label for="pesan" class="col-form-label">Pesan</label>
											<textarea type="pesan" class="form-control" name="pesan" id="pesan" required></textarea>
										</div>
										<div class="form-group mt-3">
											<center>
											<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
											<button type="reset" class="btn btn-primary">Reset</button>
											<button type="submit" name="submit" class="btn btn-primary">Save</button>
											</center>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					      
					<!-- hubungi -->
				<div class="container-hubungi" id = "hubungi">
					<br>
					<center><h1 style="color:white">INFO</h1></center>
					<br>
					<div class="text">
						<p style="color:white">Universitas Bina Sarana Informatika headquarters is in Jakarta Pusat, Indonesia. Universitas Bina Sarana Informatika is in the sectors of: Network Engineering. To connect with Universitas Bina Sarana Informatika's employee register on here.</p>
						<p style="color:white">Kantor pusat Universitas Bina Sarana Informatika berada di Jakarta Pusat, Indonesia. Universitas Bina Sarana Informatika bergerak di bidang: Rekayasa Jaringan. Untuk terhubung dengan pendaftaran karyawan Universitas Bina Sarana Informatika di Sini.</p>
					</div>
				</div>
						<div class="container-isi" id = "isi">
							<h1>Lokasi saya</h1>
							<hr class="split">
							<div class="cards">

								<a href="https://goo.gl/maps/wgzReHVjgS1qTLH89">
								<div class="card">
									<img src="../images/bsi1.jpeg" alt="">
									<center><p>klik gambar ini untuk melihat lokasi</p></center>
								</div>
								</a>

								<a href="https://goo.gl/maps/wgzReHVjgS1qTLH89">
								<div class="card">
									<img src="../images/bsi1.jpeg" alt="">
									<center><p>klik gambar ini untuk melihat lokasi</p></center>
								</div>
								</a>

							</div>
						</div>

					<div class="col-4" style="color:white">
						<h4>Address</h4>
						<p>Jl. Kramat Raya No.98, RW.9, Kwitang, Kec. Senen, Kota Jakarta Pusat, DKI Jakarta 10450</p>
					</div>
					<div class="col-4" style="color:white">
						<h4>Email</h4>
						<p>magfurpazzo@student.esaunggul.ac.id</p>
					</div>
					<div class="col-4" style="color:white">
						<h4>Telp.</h4>
						<p>(021) 123456789</p>
					</div>
					<div class="col-4" style="color:white">
						<h4>Hp</h4>
						<p>081301020304</p>
					</div>

					<?php
						include '../koneksi.php';
						if (isset($_POST['submit'])) {
							$nama = $_POST['nama'];
							$telp = $_POST['telp'];
							$email = $_POST['email'];
							$pesan = $_POST['pesan'];

							$insert = mysqli_query($con, "INSERT INTO hubungi VALUES (
								null,
								'".$nama."',
								'".$telp."',
								'".$email."',
								'".$pesan."' ) ");
							if ($insert) {
								echo '<script>alert("Simpan Data Berhasil")</script>';
								echo '<script>window.location="hubungi.php"</script>';
							}else{
								echo '<script>alert("Simpan Data Gagal")</script>'.mysqli_error($conn);
								echo '<script>window.location="hubungi.php"</script>';
							}
						}
					?>
				</div>
			</section>
		</div>
	</div>
	    	<div class="row"></div>



    <!-- Footer -->
    <footer><small>&copy Copyright 2023 Muhamad Magfur</small></footer>

	<!-- Bootstrap CSS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>