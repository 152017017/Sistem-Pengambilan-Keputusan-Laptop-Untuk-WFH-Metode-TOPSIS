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
</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">

								<ul class="left" style="margin-left: -52px;">
									<li><a href="index.php">BERANDA</a></li>
									<li><a class="active" href="rekomendasi.php">REKOMENDASI</a></li>
                                    <li><a href="daftar_laptop.php">DAFTAR LAPTOP</a></li>
                                    <li><a href="#about">TENTANG</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar Laptop Start -->
        <div style="background-color: #9DBAD5">
            <div class="container">
                <div class="section-card" style="padding: 32px 0px 20px 0px">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col s3">
                                </div>
                                <div class="col s6">      
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="row">
                                                <center><h4>Masukkan Bobot</h4></center>
                                                <br>
                                                <form class = "col s12" method="POST" action="hasil.php">
                                                    <div class = "row">
                                                        <div class="col s12">

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Harga</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="harga">
                                                                    <option value = "" disabled selected style="color: #eceff1;"><i>Kriteria Harga</i></option>
                                                                    <option value = "1">< Rp. 5.000.000</option>
                                                                    <option value = "2">11.000.000 - 13.000.000</option>
                                                                    <option value = "3">18.000.000 - 21.000.000</option>
                                                                    <option value = "4">22.000.000 - 25.000.000</option>
                                                                    <option value = "5">> 25.000.000</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                            <b>Layar Monitor</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="layar">
                                                                    <option value = "" disabled selected>Kriteria Layar</option> 
                                                                    <option value = "1">< 14"</option>
                                                                    <option value = "3">14"</option>
                                                                    <option value = "5">> 14"</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Kamera Web</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="kamera">
                                                                    <option value = "" disabled selected>Kriteria Kamera</option>
                                                                    <option value = "1">720p</option>
                                                                    <option value = "2">1080p</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Daya Tahan Baterai</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="baterai">
                                                                    <option value = "" disabled selected>Kriteria Baterai</option>
                                                                    <option value = "1">6 - 8 Jam</option>
                                                                    <option value = "2">8 - 10 Jam</option>
                                                                    <option value = "3">11 - 12 Jam</option>
                                                                    <option value = "4">15 - 18 Jam</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Memori RAM</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="ram">
                                                                    <option value = "" disabled selected>Kriteria RAM</option>
                                                                    <option value = "1">8 Gb</option>
                                                                    <option value = "2">8 - 16 Gb</option>
                                                                    <option value = "3">16 - 32 Gb</option>
                                                                    <option value = "4">32 - 64 Gb</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Penyimpanan HDD</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="hdd">
                                                                    <option value = "" disabled selected>Kriteria HDD</option>
                                                                    <option value = "1">64 - 128 Gb</option>
                                                                    <option value = "2">128 - 256 Gb</option>
                                                                    <option value = "3">256 - 512 Gb</option>
                                                                    <option value = "4">512 Gb - 1 Tb</option>
                                                                    <option value = "5">> 1 Tb</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Processor</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="processor">
                                                                    <option value = "" disabled selected>Kriteria Processor</option>
                                                                    <option value = "1">Processor AMD</option>
                                                                    <option value = "2">Processor Intel</option>
                                                                </select>
                                                            </div>
                                                            
                                                        </div>  
                                                    <center><button type="submit" class="waves-effect waves-light btn" style="margin-bottom:-46px;">Hitung</button></center>	
                                                </form>       
                                            </div>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="col s3">
                                </div>
                            </div>
                        </li>
                    </ul>	     
                </div>
            </div>
        </div>
        <!-- Rekomendasi Laptop End -->

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
          $('select').material_select();
          $('.modal').modal();
	    });
    </script>
</body>
</html>