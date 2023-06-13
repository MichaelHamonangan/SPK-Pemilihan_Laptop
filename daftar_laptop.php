<?php 
session_start();
include('connection.php');
?>

<?php 
	if(isset($_POST["tambah_laptop"])){
		$merk      = $_POST["merk"];
		$seri      = $_POST["seri"];
		$harga     = $_POST["harga"];
		$layar     = $_POST["layar"];
		$ram       = $_POST["ram"];
		$jenis_memori    	= $_POST["jenis_memori"];
		$ukuran_memori    	= $_POST["ukuran_memori"];
		$processor 			= $_POST["processor"];
		
		$harga_angka = $layar_angka = $ram_angka = $jenis_memory_angka = $ukuran_memory_angka = $processor_angka = 0;

		if($harga > 30000000){
			$harga_angka = 10;
		} 
		elseif($harga <= 30000000 && $harga > 20000000){
			$harga_angka = 9;
		}
		elseif($harga <= 20000000 && $harga > 15000000){
			$harga_angka = 7;
		}
		elseif($harga <= 15000000 && $harga > 10000000){
			$harga_angka = 5;
		}
		elseif($harga <= 10000000 && $harga > 7000000){
			$harga_angka = 4;
		}
		elseif($harga <= 7000000 && $harga > 4000000){
			$harga_angka = 3;
		}
		elseif($harga <= 4000000 && $harga > 2000000){
			$harga_angka = 2;
		}
		elseif($harga < 2000000){
			$harga_angka = 1;
		}

		if($layar < 11){
			$harga_angka = 1;
		} 
		elseif($layar >= 11 && $layar <= 14){
			$harga_angka = 3;
		}
		elseif($harga > 14){
			$harga_angka = 5;
		}

		if($ram == 4){
			$ram_angka = 1;
		}
		elseif($ram == 8){
			$ram_angka = 2;
		}
		elseif($ram == 16){
			$ram_angka = 3;
		}
		elseif($ram == 32){
			$ram_angka = 4;
		}
		elseif($ram == 64){
			$ram_angka = 5;
		}


		if($jenis_memori == "SSD"){
			$jenis_memory_angka = 1;
		}
		elseif($jenis_memori == "HDD"){
			$jenis_memory_angka = 5;
		}


		if($ukuran_memory == 256){
			$ukuran_memory_angka = 1;
		}
		elseif($ukuran_memory == 512){
			$ukuran_memory_angka = 2;
		}
		elseif($ukuran_memory == 1024){
			$ukuran_memory_angka = 3;
		}
		elseif($ukuran_memory == 2048){
			$ukuran_memory_angka = 4;
		}
		elseif($ukuran_memory == 4096){
			$ukuran_memory_angka = 5;
		}

		if($processor == "Performa Minimum"){
			$processor_angka = 1;
		}
		elseif($processor == "Performa Rendah"){
			$processor_angka = 2;
		}
		elseif($processor == "Performa Sedang"){
			$processor_angka = 3;
		}
		elseif($processor == "Performa Tinggi"){
			$processor_angka = 4;
		}
		elseif($processor == "Performa Maximum"){
			$processor_angka = 5;
		}
		
		$sql = "INSERT INTO `data_hp` (`id`, `merk`, `seri`, `harga`, `layar`, `ram`, `jenis_memory`, `ukuran_memory`, `processor`, `harga_angka`,`layar_angka`, `ram_angka`, `jenis_memory_angka`,`ukuran_memory_angka`, `processor_angka`) 
				VALUES (NULL, :merk, :seri, :harga, :layar, :ram, :jenis_memory, :ukuran_memory, :processor, :harga_angka,:layar_angka, :ram_angka, :jenis_memory_angka,:ukuran_memory_angka, :processor_angka)";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':merk', $merk);
		$stmt->bindValue(':seri', $seri);
		$stmt->bindValue(':harga', $harga);
		$stmt->bindValue(':layar', $layar);
		$stmt->bindValue(':ram', $ram);
		$stmt->bindValue(':jenis_memory', $jenis_memory);
		$stmt->bindValue(':ukuran_memory', $ukuran_memory);
		$stmt->bindValue(':processor', $processor);
		$stmt->bindValue(':harga_angka', $harga_angka);
		$stmt->bindValue(':layar_angka', $layar_angka);
		$stmt->bindValue(':ram_angka', $ram_angka);
		$stmt->bindValue(':jenis_memory_angka', $jenis_memory_angka);
		$stmt->bindValue(':ukuran_memory_angka', $ukuran_memory_angka);
		$stmt->bindValue(':processor_angka', $processor_angka);
		$stmt->execute();
	}

	if(isset($_POST["hapus_laptop"])){
		$id_hapus_laptop = $_POST['id_hapus_laptop'];
		$sql_delete = "DELETE FROM `daftar_laptop` WHERE `id` = :id_hapus_laptop";
		$stmt_delete = $db->prepare($sql_delete);
		$stmt_delete->bindValue(':id_hapus_laptop', $id_hapus_laptop);
		$stmt_delete->execute();
		$query_reorder_id=mysqli_query($selectdb,"ALTER TABLE daftar_laptop AUTO_INCREMENT = 1");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan LAPTOP</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

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
									<li><a href="index.php">HOME</a></li>
									<li><a href="model.php">REKOMENDASI</a></li>
									<li><a class="active" href="daftar_laptop.php">DAFTAR LAPTOP</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar hp Start -->
	<div style="background-color: #efefef">
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
													<th><center>Nama HP</center></th>
													<th><center>Harga HP</center></th>
													<th><center>RAM HP</center></th>
													<th><center>Memori HP</center></th>
													<th><center>Processor HP</center></th>
													<th><center>Kamera HP</center></th>
													<th><center>Hapus</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM daftar_laptop");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo $no; ?></center></td>
													<td><center><?php echo $data['nama_hp'] ?></center></td>
													<td><center><?php echo "Rp. ", $data['harga_hp'] ?></center></td>
													<td><center><?php echo $data['ram_hp']," GB" ?></center></td>
													<td><center><?php echo $data['memori_hp']," GB" ?></center></td>
													<td><center><?php echo $data['processor_hp'] ?></center></td>
													<td><center><?php echo $data['kamera_hp']," MP" ?></center></td>
													<td>
														<center>
															<form method="POST">
																<input type="hidden" name="id_hapus_laptop" value="<?php echo $data['id_hp'] ?>">
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
							<a href="#tambah" class="btn-floating btn-large waves-effect waves-light teal btn-float-custom"><i class="material-icons">add</i></a>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar hp End -->

	<!-- Daftar hp Start -->
	<div style="background-color: #efefef">
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
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM daftar_laptop");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo "A",$no ?></center></td>
													<td><center><?php echo $data['harga_angka'] ?></center></td>
													<td><center><?php echo $data['ram_angka'] ?></center></td>
													<td><center><?php echo $data['memori_angka'] ?></center></td>
													<td><center><?php echo $data['processor_angka'] ?></center></td>
													<td><center><?php echo $data['kamera_angka'] ?></center></td>
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
	<div id="tambah" class="modal" style="width: 40%; height: 100%;">
		<div class="modal-content">
			<div class="col s6">
					<div class="card-content">
						<div class="row">
							<center><h5 style="margin-top:-8px;">Masukan Laptop</h5></center>
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
										<b>RAM</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="ram">
												<!-- <option value = "" disabled selected>Kriteria RAM</option>  -->
												<option value = "1">1 Gb</option>
												<option value = "2">2 Gb</option>
												<option value = "3">3 Gb</option>
												<option value = "4">4 Gb</option>
												<option value = "6">6 Gb</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Memori</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="memori">
												<!-- <option value = "" disabled selected>Kriteria Penyimpanan</option> -->
												<option value = "4">4 Gb</option>
												<option value = "8">8 Gb</option>
												<option value = "16">16 Gb</option>
												<option value = "32">32 Gb</option>
												<option value = "64">64 Gb</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Processor</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="processor">
												<option value = "Dualcore">Dualcore</option>
												<option value = "Quadcore">Quadcore</option>
												<option value = "Octacore">Octacore</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Kamera</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="kamera">
												<!-- <option value = "" disabled selected>Kriteria Kamera</option> -->
												<option value = "8">8 Mp</option>
												<option value = "13">13 Mp</option>
												<option value = "16">16 Mp</option>
											</select>
										</div>

									</div>  
								</div> 
								<center><button name="tambah_laptop" type="submit" class="waves-effect waves-light btn teal" style="margin-top: 0px;">Tambah</button></center>	
							</form>
						</div>
					</div>
				</div>
			</div>
		<div style="height: 0px; "class="modal-footer">
          <a style="margin-top: -30px;" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
	</div>
	<!-- Modal End -->

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
		$('.modal').modal();
		$('#table_id').DataTable({
    		"paging": false
		});
	    });
	</script>
</body>
</html>