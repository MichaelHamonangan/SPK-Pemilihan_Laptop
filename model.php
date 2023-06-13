<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Laptop</title>
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
									<li><a href="index.php">HOME</a></li>
									<li><a class="active" href="model.php">REKOMENDASI</a></li>
                                    <li><a href="daftar_laptop.php">DAFTAR LAPTOP</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar Laptop Start -->
        <div style="background-color: #efefef">
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
                                                <center><h4>Masukkan Kriteria Laptop</h4></center>
                                                <br>
                                                <form class = "col s12" method="POST" action="output.php">
                                                    <div class = "row">
                                                        <div class="col s12">

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Rentang Harga</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="harga">
                                                                    <option value = "" disabled selected style="color: #eceff1;"><i>Kriteria Harga</i></option>
                                                                    <option value = "10">> Rp. 30.000.000</option>
                                                                    <option value = "9">30.000.000 - 20.000.000</option>
                                                                    <option value = "7">20.000.000 - 15.000.000</option>
                                                                    <option value = "5">15.000.000 - 10.000.000</option>
                                                                    <option value = "4">10.000.000 - 7.000.000</option>
                                                                    <option value = "3">7.000.000 - 4.000.000</option>
                                                                    <option value = "2">4.000.000 - 2.000.000</option>
                                                                    <option value = "1">< 2.000.000</option>
                                                                </select>
                                                            </div>


                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Ukuran Layar</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="layar">
                                                                    <option value = "" disabled selected style="color: #eceff1;"><i>Kriteria Layar</i></option>
                                                                    <option value = "5">> 14'</option>
                                                                    <option value = "3">11' - 14</option>
                                                                    <option value = "1">< 11'</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                            <b>RAM</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="ram">
                                                                    <option value = "" disabled selected>Kriteria RAM</option> 
                                                                    <option value = "5">64 Gb</option>
                                                                    <option value = "4">32 Gb</option>
                                                                    <option value = "3">16 Gb</option>
                                                                    <option value = "2">8 Gb</option>
                                                                    <option value = "1">4 Gb</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                            <b>Jenis Memori</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="jenis_memory">
                                                                    <option value = "" disabled selected>Kriteria Jenis Memori</option> 
                                                                    <option value = "1">SSD</option>
                                                                    <option value = "5">HDD</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Ukuran Memori</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="ukuran_memory">
                                                                    <option value = "" disabled selected>Kriteria Ukuran Memori</option>
                                                                    <option value = "5">4096 Gb</option>
                                                                    <option value = "4">2048 Gb</option>
                                                                    <option value = "3">1024 Gb</option>
                                                                    <option value = "2">512 Gb</option>
                                                                    <option value = "1">256 Gb</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Processor</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="processor">
                                                                    <option value = "" disabled selected>Kriteria Processor</option>
                                                                    <option value = "9">Performa Maximum</option>
                                                                    <option value = "7">Performa Tinggi</option>
                                                                    <option value = "5">Performa Sedang</option>
                                                                    <option value = "3">Performa Rendah</option>
                                                                    <option value = "1">Performa Minimum</option>
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

    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px; background-color: white">
      <div class="container">
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Laptop</p>
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