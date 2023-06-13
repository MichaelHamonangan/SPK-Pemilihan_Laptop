<!DOCTYPE html>
<html>
<head>
	<title>Leppi: Sistem Pendukung Keputusan Pemilihan Laptop</title>
	<meta property="og:image" content="assets/image/laptop2.jpg" />
	<meta name="description" content="Leppi adalah aplikasi Sistem Pendukung Keputusan Laptop berbasis Metode Weight Product">
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
<body style="background-color:#F7F7F7F">
	<!-- Header Start-->
	<div class="navbar-fixed">
	<nav style="background-color:#F7F7F7">
    	<div class="container">
			<div class="nav-wrapper" style="background-color:DodgerBlue;">
				<ul class="left" style="margin-left: -52px;">
					<li><a class="active" href="index.php">HOME</a></li>
					<li><a href="model.php">REKOMENDASI</a></li>
					<li><a href="daftar_laptop.php">DAFTAR LAPTOP</a></li>
				</ul>
			</div>
        </div>
		</nav>
		</div>
	<!-- Header End -->

    <!-- Body Start -->

		<!-- Jumbotron Start -->
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<h1 class="header jarak center white-text" style="font-size: 40px">Sistem Pendukung Keputusan: Pemilihan Laptop</h1>
					<div class="row center">
						<h5 class="header jarak-button col s12 light" style="margin-bottom: 0px; font-size: 26px">Metode Topsis</h5>
						</div>
					<div class="row center" \>
						<a href="model.php" id="download-button" class="waves-effect waves-light btn-large" style="margin-top: 40px">Mulai pilih Laptop mu</a>
						</div>
					</div>
				</div>
			<div class="parallax"><img style="width:100%;" src="assets/image/laptop2.jpg" alt="Laptop"></div>
		</div>
		<!-- Jumbotron End -->

	<!-- Info Start -->
	<div style="background-color: white">
		<div class="container">
		    <div class="section-card" style="padding: 36px 0px">
		    	<div class="row">
		    		<div class="col s6">
						<center><h5 class="header" style="margin-left: 0px; margin-bottom: 0px; margin-top: 25px; color: #635c73">Tentang Aplikasi Ini</h5></center><br>
			    		<p style="text-align: justify; padding-right: 16px;">Program ini membantu kamu untuk memilih laptop yang cocok atau serupa
						dengan spesifikasi laptop yang kamu butuhkan. Kamu tinggal memasukkan spesifikasi laptop seperti apa yang kamu inginkan.
						Kami akan sesuaikan dengan budget yang kamu punya!</p>
						</div>
			    	<div class="col s6">
			    		<center><h5 class="header" style="margin-left: 0px; margin-bottom: 0px; margin-top: 25px; color: #635c73">Tentang Metode TOPSIS</h5></center><br>
							<p style="text-align: justify; padding-left: 16px;"> TOPSIS (Technique for Order Preference by Similarity to Ideal Solution) adalah
							metode pengambilan keputusan multi-kriteria yang digunakan untuk memilih alternatif terbaik dari sejumlah opsi yang tersedia.
							Metode ini menggabungkan konsep perbandingan terhadap solusi ideal dan solusi yang paling buruk untuk mengevaluasi alternatif
							berdasarkan kriteria yang telah ditentukan sebelumnya.
							</p>
							</div>
		    	</div>
	    	</div>
		</div>
	</div>
	<!-- Info End -->

    <script type="text/javascript">
	 			$(document).ready(function(){
	      $('.parallax').parallax();
				$('.modal').modal();
	    });
	</script>
</body>
</html>