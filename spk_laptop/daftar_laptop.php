<?php 
session_start();
include('koneksi.php');
?>

<?php 
	if(isset($_POST["tambah_laptop"])){
		$nama      = $_POST["nama"];
		$harga     = $_POST["harga"];
		$layar     = $_POST["layar"];
		$kamera    = $_POST["kamera"];
		$baterai     = $_POST["baterai"];
		$ram       = $_POST["ram"];
		$hdd    = $_POST["hdd"];
		$processor = $_POST["processor"];
		
		$harga_angka = $layar_angka = $kamera_angka = $baterai_angka = $ram_angka = $hdd_angka = $processor_angka = 0;

		if($harga < 5000000){
			$harga_angka = 1;
		} 
		elseif($harga >= 11000000 && $harga <= 13000000){
			$harga_angka = 2;
		}
		elseif($harga >= 18000000 && $harga <= 21000000){
			$harga_angka = 3;
		}
		elseif($harga >= 22000000 && $harga <= 25000000){
			$harga_angka = 4;
		}
		elseif($harga > 25000000){
			$harga_angka = 5;
		}

		if($layar < 14){
			$layar_angka = 1;
		}
		elseif($layar == 14){
			$layar_angka = 3;
		}
		elseif($layar > 14){
			$layar_angka = 5;
		}

		if($kamera == 720){
			$kamera_angka = 1;
		}
		elseif($kamera == 1080){
			$kamera_angka = 2;
		}

		if($baterai >= 6 && $baterai <= 8){
			$baterai_angka = 1;
		} 
		elseif($baterai > 8 && $baterai <= 10){
			$baterai_angka = 2;
		}
		elseif($baterai >= 11 && $baterai <= 12){
			$baterai_angka = 3;
		}
		elseif($baterai >= 15 && $baterai <= 18){
			$baterai_angka = 4;
		}

		if($ram == 8){
			$ram_angka = 1;
		}
		elseif($ram > 8 && $ram <= 16){
			$ram_angka = 2;
		}
		elseif($ram > 16 && $ram <= 32){
			$ram_angka = 3;
		}
		elseif($ram > 32 && $ram <= 64){
			$ram_angka = 4;
		}

		if($hdd >= 64 && $hdd <= 128){
			$hdd_angka = 1;
		}
		elseif($hdd > 128 && $hdd <= 256){
			$hdd_angka = 2;
		}
		elseif($hdd > 256 && $hdd <= 512){
			$hdd_angka = 3;
		}
		elseif($hdd > 512 && $hdd <= 1024){
			$hdd_angka = 4;
		}
		elseif($hdd > 1024){
			$hdd_angka = 5;
		}

		if($processor == "AMD"){
			$processor_angka = 1;
		}
		elseif($processor == "Intel"){
			$processor_angka = 2;
		}

		$sql = "INSERT INTO `spesifikasi` (`id_laptop`, `nama_laptop`, `harga_laptop`, `layar_laptop`, `kamera_laptop`, `baterai_laptop`, `ram_laptop`, `hdd_laptop`, `processor_laptop`, `harga_angka`, `layar_angka`, `kamera_angka`, `baterai_angka`, `ram_angka`, `hdd_angka`, `processor_angka`) 
				VALUES (NULL, :nama_laptop, :harga_laptop, :layar_laptop, :kamera_laptop, :baterai_laptop, :ram_laptop, :hdd_laptop, :processor_laptop, :harga_angka, :layar_angka, :kamera_angka, :baterai_angka, :ram_angka, :hdd_angka, :processor_angka)";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':nama_laptop', $nama);
		$stmt->bindValue(':harga_laptop', $harga);
		$stmt->bindValue(':layar_laptop', $layar);
		$stmt->bindValue(':kamera_laptop', $kamera);
		$stmt->bindValue(':baterai_laptop', $baterai);
		$stmt->bindValue(':ram_laptop', $ram);
		$stmt->bindValue(':hdd_laptop', $hdd);
		$stmt->bindValue(':processor_laptop', $processor);
		$stmt->bindValue(':harga_angka', $harga_angka);
		$stmt->bindValue(':layar_angka', $layar_angka);
		$stmt->bindValue(':kamera_angka', $kamera_angka);
		$stmt->bindValue(':baterai_angka', $baterai_angka);
		$stmt->bindValue(':ram_angka', $ram_angka);
		$stmt->bindValue(':hdd_angka', $hdd_angka);
		$stmt->bindValue(':processor_angka', $processor_angka);
		$stmt->execute();
	}

	if(isset($_POST["hapus_laptop"])){
		$id_hapus_laptop = $_POST['id_hapus_laptop'];
		$sql_delete = "DELETE FROM `spesifikasi` WHERE `id_laptop` = :id_hapus_laptop";
		$stmt_delete = $db->prepare($sql_delete);
		$stmt_delete->bindValue(':id_hapus_laptop', $id_hapus_laptop);
		$stmt_delete->execute();
		$query_reorder_id=mysqli_query($selectdb,"ALTER TABLE spesifikasi AUTO_INCREMENT = 1");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SPK - Rekomendasi Laptop Work From Home</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png"> 	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Data Table -->
	<link rel="stylesheet" type="text/css" href="assets/dataTable/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="assets/dataTable/jquery.dataTables.min.js"></script>

</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">
								<ul class="left" style="margin-left: -52px;">
									<li><a href="index.php">BERANDA</a></li>
									<li><a href="rekomendasi.php">REKOMENDASI</a></li>
									<li><a class="active" href="daftar_laptop.php">DAFTAR LAPTOP</a></li>
									<li><a href="#about">TENTANG</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar hp Start -->
	<div style="background-color: #9DBAD5">
		<div class="container">
		    <div class="section-card" style="padding: 40px 0px 20px 0px;">
				<ul>
				    <li>
						<div class="row">
						<div class="card">
								<div class="card-content">
									<center><h4 style="margin-bottom: 0px; margin-top: -8px;">Daftar Laptop</h4></center>
									<table id="table_id" class="hover dataTablesCustom" style="width:100%">
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>No </center></th>
													<th><center>Nama</center></th>
													<th><center>Harga</center></th>
													<th><center>Layar</center></th>
													<th><center>Kamera</center></th>
													<th><center>Baterai</center></th>
													<th><center>RAM</center></th>
													<th><center>HDD</center></th>
													<th><center>Processor</center></th>													
													<th><center>Hapus</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM spesifikasi");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo $no; ?></center></td>
													<td><center><?php echo $data['nama_laptop'] ?></center></td>
													<td><center><?php echo "Rp. ", $data['harga_laptop'] ?></center></td>
													<td><center><?php echo $data['layar_laptop']," ''" ?></center></td>
													<td><center><?php echo $data['kamera_laptop']," P" ?></center></td>
													<td><center><?php echo $data['baterai_laptop']," Jam" ?></center></td>
													<td><center><?php echo $data['ram_laptop']," GB" ?></center></td>
													<td><center><?php echo $data['hdd_laptop']," GB" ?></center></td>
													<td><center><?php echo $data['processor_laptop'] ?></center></td>
													<td>
														<center>
															<form method="POST">
																<input type="hidden" name="id_hapus_laptop" value="<?php echo $data['id_laptop'] ?>">
																<button type="submit" name="hapus_laptop" style="height: 32px; width: 32px;" class="btn-floating btn-small waves-effect waves-light red"><i style="line-height: 32px;" class="material-icons">remove</i></button>
															</form>
														</center>
													</td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
									
							</div>
							<a href="#tambah" class="btn-floating btn-large waves-effect waves-light btn-float-custom"><i class="material-icons">add</i></a>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar hp End -->

	<!-- Daftar hp Start -->
	<div style="background-color: #9DBAD5">
		<div class="container">
		    <div class="section-card" style="padding: 1px 20% 24px 20%;">
				<ul>
				    <li>
						<div class="row">
							<div class="card">
								<div class="card-content" style="padding-top: 10px;">
									<center><h5 style="margin-bottom: 10px;">Analisa Laptop</h5></center>
									<table class="responsive-table">
									
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>Alternatif</center></th>
													<th><center>C1 (Cost)</center></th>
													<th><center>C2 (Benefit)</center></th>
													<th><center>C3 (Benefit)</center></th>
													<th><center>C4 (Benefit)</center></th>
													<th><center>C5 (Benefit)</center></th>
													<th><center>C6 (Benefit)</center></th>
													<th><center>C7 (Benefit)</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM spesifikasi");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo "A",$no ?></center></td>
													<td><center><?php echo $data['harga_angka'] ?></center></td>
													<td><center><?php echo $data['layar_angka'] ?></center></td>
													<td><center><?php echo $data['kamera_angka'] ?></center></td>
													<td><center><?php echo $data['baterai_angka'] ?></center></td>
													<td><center><?php echo $data['ram_angka'] ?></center></td>
													<td><center><?php echo $data['hdd_angka'] ?></center></td>
													<td><center><?php echo $data['processor_angka'] ?></center></td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
							</div>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar hp End -->

	<!-- Modal Start -->
	<div id="tambah" class="modal">
		<div class="modal-content">
					<div class="card-content">
						<div class="row">
							<center><h5>Masukkan Data Laptop</h5></center>
							<form method="POST" action="">
								<div class = "row">
									<div class="col s12">

										<div class="col s6" style="margin-top: 10px;">
											<b>Nama</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="nama" type="text" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Harga</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="harga" type="number" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Layar Monitor</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="layar" type="text" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Kamera Web</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="kamera">
											<option value = "" disabled selected>Kriteria Kamera</option>
                                                                    <option value = "720">720p</option>
                                                                    <option value = "1080">1080p</option>
											</select>
										</div>
										
										<div class="col s6" style="margin-top: 10px;">
											<b>Daya Tahan Baterai</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="baterai" type="text" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Memori RAM</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="ram" type="text" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Penyimpanan HDD</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="hdd" type="text" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Processor</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="processor">
											<option value = "" disabled selected>Kriteria Processor</option>
                                                                    <option value = "AMD">Processor AMD</option>
                                                                    <option value = "Intel">Processor Intel</option>
											</select>
										</div>

									</div>  
								</div> 
								<center><button name="tambah_laptop" type="submit" class="waves-effect waves-light btn" style="margin-top: 0px;">Tambah</button></center>	
							</form>
						</div>
				</div>
			</div>
	</div>
	<!-- Modal End -->

	<!-- Modal Start -->
	<div id="about" class="modal">
		<div class="modal-content">
		<h4>Tentang</h4>
      <p style="text-align: justify;">Sistem Pendukung Keputusan Rekomendasi Laptop untuk Work From Home ini menggunakan metode TOPSIS yang dibangun menggunakan bahasa pemrograman PHP. Dibuat sebagai Tugas Akhir Mata Kuliah Sistem Pendukung Keputusan Jurusan Informatika Institut Teknologi Nasional 2021.
			</p>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
		</div>
	</div>
	<!-- Modal End -->

    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px; background-color: white">
      <div class="container">
        <p align="center" style="color: #999">&copy; SPK - Rekomendasi Laptop Work From Home 2021</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  	$(document).ready(function(){
		$('.parallax').parallax();
		$('.modal').modal();
		$('#table_id').DataTable({
    		"paging": false
		});
	    });
	</script>
</body>
</html>