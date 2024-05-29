<!DOCTYPE html>
<html>

<head>
	<title>GILACODING</title>
</head>
<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
	<div class="container col-md-6 mt-4">
		<h1>Table Biodata</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Tambah Biodata
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<!-- <div class="form-group">
						<label>Id</label>
						<input type="text" name="id" required="" class="form-control">
					</div> -->
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control">
					</div>

					<div class="form-group">
						<label>Nis</label>
						<textarea type="number" class="form-control" name="nis"></textarea>
					</div>

                    <div class="form-group">
						<label>Rombel</label>
						<input type="text" name="rombel" class="form-control">
					</div>

                    <div class="form-group">
						<label>Rayon</label>
						<input type="text" name="rayon" class="form-control">
					</div>
					<br>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
				</form>

				<?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$id = $_POST['id'];
					$nama = $_POST['nama'];
					$nis = $_POST['nis'];
                    $rombel = $_POST['rombel'];
                    $rayon = $_POST['rayon'];

					//query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into hana (id, nama, nis, rombel, rayon)values('$id', '$nama', '$nis', '$rombel', '$rayon')") or die(mysqli_error($koneksi));
					//id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>