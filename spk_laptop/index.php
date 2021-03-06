<!DOCTYPE html>
<html>
<head>
	<title>SPK - Rekomendasi Laptop Work From Home</title>
	<meta property="og:image" content="assets/image/laptop.jpg" />
	<meta name="description" content="Sistem Pendukung Keputusan Rekomendasi Laptop untuk WFH dengan Metode Topsis">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<script>
	$(document).ready(function(){
	  $(".button-collapse").sideNav();
	  $(".dropdown-button").dropdown();
	});
	</script>
</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
						<div class="nav-wrapper">
								<ul class="left" style="margin-left: -52px;">
									<li><a class="active" href="index.php">BERANDA</a></li>
									<li><a href="rekomendasi.php">REKOMENDASI</a></li>
									<li><a href="daftar_laptop.php">DAFTAR LAPTOP</a></li>
									<li><a href="#about">TENTANG</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
    <!-- Body Start -->

		<!-- Jumbotron Start -->
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<h1 class="header jarak center white-text" style="font-size: 40px">SISTEM PENDUKUNG KEPUTUSAN REKOMENDASI LAPTOP WORK FROM HOME</h1>
					<div class="row center">
						<h5 class="header jarak-button col s12 light" style="margin-bottom: 0px; font-size: 26px">DENGAN METODE TOPSIS</h5>
					</div>
					<div class="row center" \>
								<a href="rekomendasi.php" id="download-button" class="waves-effect waves-light btn-large" style="margin-top: 40px">Pilih Rekomendasi</a>
							</div>
				</div>
			</div>
			<div class="parallax"><img src="assets/image/home.png" alt="Laptop"></div>
		</div>
		<!-- Jumbotron End -->

	<!-- Info Start -->
	<div style="background-color: white">
		<div class="container">
		    <div class="section-card" style="padding: 36px 0px">
		    	<div class="row">
		    		<!-- <div class="col s6">
			    		<center><h5 class="header" style="margin-left: 0px; margin-bottom: 0px; margin-top: 25px; color: #635c73">INFO SISTEM</h5></center><br>
			    		<p style="text-align: justify; padding-right: 16px;">Sistem Pendukung Keputusan Rekomendasi Laptop untuk Work From Home ini menggunakan metode TOPSIS yang dibangun menggunakan bahasa pemrograman PHP.</p>
						</div> -->
			    	<div class="col">
			    		<center><h5 class="header" style="margin-left: 0px; margin-bottom: 0px; margin-top: 25px; color: #635c73">METODE TOPSIS</h5></center><br>
							<p style="text-align: justify; padding-left: 16px;">Sistem ini menggunakan metode TOPSIS (Technique for Order Preference by Similarity to Ideal Solution) yang merupakan salah satu metode penyelesaian pada Sistem Pendukung Keputusan untuk mengevaluasi beberapa alternatif terhadap sekumpulan atribut atau kriteria. 
							TOPSIS merupakan metode yang menggunakan prinsip bahwa alternatif yang terpilih harus mempunyai jarak terdekat dari solusi ideal positif dan terjauh dari solusi ideal negatif.</p>
							</div>
		    	</div>
	    	</div>
		</div>
	</div>
	<!-- Info End -->

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
	
    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px">
      <div class="container">
        <p align="center" style="color: #999">&copy; SPK - Rekomendasi Laptop Work From Home 2021</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	 			$(document).ready(function(){
	      $('.parallax').parallax();
				$('.modal').modal();
	    });
	</script>
</body>
</html>