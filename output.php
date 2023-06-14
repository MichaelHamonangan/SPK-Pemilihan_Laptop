<?php 
session_start();
include('connection.php');

//Bobot
$W1	= $_POST['harga'];
$W2	= $_POST['layar'];
$W3	= $_POST['ram'];
$W4	= $_POST['jenis_memory'];
$W5	= $_POST['ukuran_memory'];
$W6	= $_POST['processor'];

//Pembagi Normalisasi
function pembagiNM($matrik){
	for($i=0;$i<6;$i++){
		$pangkatdua[$i] = 0;
		for($j=0;$j<sizeof($matrik);$j++){
			$pangkatdua[$i] = $pangkatdua[$i] + pow($matrik[$j][$i],2);}
		$pembagi[$i] = sqrt($pangkatdua[$i]);
	}
	return $pembagi;
}

//Normalisasi
function Transpose($squareArray) {

    if ($squareArray == null) { return null; }
    $rotatedArray = array();
    $r = 0;

    foreach($squareArray as $row) {
        $c = 0;
        if (is_array($row)) {
            foreach($row as $cell) { 
                $rotatedArray[$c][$r] = $cell;
                ++$c;
            }
        }
        else $rotatedArray[$c][$r] = $row;
        ++$r;
    }
    return $rotatedArray;
}

function JarakIplus($aplus,$bob){
	for ($i=0;$i<sizeof($bob);$i++) {
		$dplus[$i] = 0;
		for($j=0;$j<sizeof($aplus);$j++){
			$dplus[$i] = $dplus[$i] + pow(($aplus[$j] - $bob[$i][$j]),2);
		}
		$dplus[$i] = round(sqrt($dplus[$i]),4);
	}
	return $dplus;
}

?>
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
<body style="background-color:#161616; padding-bottom: 20px;">
    <!-- Header Start-->
	<div class="navbar-fixed" style="background-color:#161616">
	<nav style="background-color:#161616">
    	<div class="container" >	
            <div class="nav-wrapper" style="background-color:#161616;font-weight:bold;">
                    <ul class="left" style="color:#F7F7F7; margin-left: -52px;">
                        <li><a style="color:#F7F7F7" href="index.php">HOME</a></li>
                        <li><a style="color:#F7F7F7" href="model.php">REKOMENDASI</a></li>
                        <li><a style="color:#F7F7F7" href="daftar_laptop.php">DAFTAR LAPTOP</a></li>
						<li><a style="color:#F7F7F7" class="active" href="output.php">PERHITUNGAN</a></li>
                    </ul>
            </div>
        </div>
		</nav>
		</div>
	<!-- Body Start -->

	<!-- Daftar Laptop Start -->
	<div style="background-color:#F05335; border-radius: 10px">
		<div class="container">
			<div class="section-card" style="padding: 25px 0px 20px 0px;">
				<!--   Icon Section   -->


				<center>
					<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #FFFFFF;">HASIL REKOMENDASI LAPTOP</h4>
				</center>
				<ul>
					<li>
						<div class="row">
							<div class="card" style="border-radius: 20px;">
								<div class="card-content">
									<h5 style="margin-bottom: 16px; margin-top: -6px;">Matrik Laptop</h5>
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
											</tr>
										</thead>
										<tbody>
											<?php
											$query=mysqli_query($selectdb,"SELECT * FROM daftar_laptop");
											$no=1;
											while ($daftar_laptop=mysqli_fetch_array($query)) {
												$Matrik[$no-1]=array($daftar_laptop['harga_angka'],$daftar_laptop['layar_angka'],$daftar_laptop['ram_angka'],$daftar_laptop['jenis_memory_angka'],$daftar_laptop['ukuran_memory_angka'],$daftar_laptop['processor_angka'] );
												?>
												<tr>
													<td><center><?php echo "A",$no ?></center></td>
													<td><center><?php echo $daftar_laptop['harga_angka'] ?></center></td>
													<td><center><?php echo $daftar_laptop['layar_angka'] ?></center></td>
													<td><center><?php echo $daftar_laptop['ram_angka'] ?></center></td>
													<td><center><?php echo $daftar_laptop['jenis_memory_angka'] ?></center></td>
													<td><center><?php echo $daftar_laptop['ukuran_memory_angka'] ?></center></td>
													<td><center><?php echo $daftar_laptop['processor_angka'] ?></center></td>
												</tr>
												<?php
												$no++;
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</li>
				</ul>


				<center>
					<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #FFFFFF;">Matriks ternormalisasi, R:</h4>
				</center>
				<ul>
					<li>
						<div class="row">
							<div class="card" style="border-radius: 20px;">
								<div class="card-content">
									<h5 style="margin-bottom: 16px; margin-top: -6px;">Matriks Normalisasi "R"</h5>
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
											</tr>
										</thead>
										<tbody>
											<?php
											$query=mysqli_query($selectdb,"SELECT * FROM daftar_laptop");
											$no=1;
											$pembagiNM=pembagiNM($Matrik);
											while ($daftar_laptop=mysqli_fetch_array($query)) {

												$MatrikNormalisasi[$no-1]=array($daftar_laptop['harga_angka']/$pembagiNM[0],
													$daftar_laptop['layar_angka']/$pembagiNM[1],
													$daftar_laptop['ram_angka']/$pembagiNM[2],
													$daftar_laptop['jenis_memory_angka']/$pembagiNM[3],
													$daftar_laptop['ukuran_memory_angka']/$pembagiNM[4],
													$daftar_laptop['processor_angka']/$pembagiNM[5]);

													?>
													<tr>
														<td><center><?php echo "A",$no ?></center></td>
														<td><center><?php echo round($daftar_laptop['harga_angka']/$pembagiNM[0],6)?></center></td>
														<td><center><?php echo round($daftar_laptop['layar_angka']/$pembagiNM[1],6) ?></center></td>
														<td><center><?php echo round($daftar_laptop['ram_angka']/$pembagiNM[2],6) ?></center></td>
														<td><center><?php echo round($daftar_laptop['jenis_memory_angka']/$pembagiNM[3],6) ?></center></td>
														<td><center><?php echo round($daftar_laptop['ukuran_memory_angka']/$pembagiNM[4],6) ?></center></td>
														<td><center><?php echo round($daftar_laptop['processor_angka']/$pembagiNM[5],6) ?></center></td>
													</tr>
													<?php
													$no++;
												}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</li>
					</ul>


					<center>
						<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #FFFFFF;">BOBOT (W)</h4>
					</center>
					<ul> 
						<li>
							<div class="row">
								<div class="card" style="border-radius: 20px;">
									<div class="card-content">
									<h5 style="margin-bottom: 16px; margin-top: -6px;">BOBOT (W)</h5>
										<table class="responsive-table">
											<thead>
												<tr>
													<th><center>Value Kriteria Harga</center></th>
													<th><center>Value Kriteria Layar</center></th>
													<th><center>Value Kriteria RAM</center></th>
													<th><center>Value Kriteria Jenis Memori</center></th>
													<th><center>Value Kriteria Ukuran Memori</center></th>
													<th><center>Value Kriteria Processor</center></th>
												</tr>
											</thead>
											<tbody>
												<!--count($W)-->
												<tr>
													<td><center><?php echo($W1);?></center></td>
													<td><center><?php echo($W2);?></center></td>
													<td><center><?php echo($W3);?></center></td>
													<td><center><?php echo($W4);?></center></td>
													<td><center><?php echo($W5);?></center></td>
													<td><center><?php echo($W6);?></center></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</li>
					</ul>


					<center>
						<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #FFFFFF;">Matriks ternormalisasi terbobot, Y:</h4>
					</center>
					<ul>
						<li>
							<div class="row">
								<div class="card" style="border-radius: 20px;">
									<div class="card-content">
										<h5 style="margin-bottom: 16px; margin-top: -6px;">Matriks Normalisasi terBobot "Y"</h5>
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
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM daftar_laptop");
												$no=1;
												$pembagiNM=pembagiNM($Matrik);
												while ($daftar_laptop=mysqli_fetch_array($query)) {
													
													$NormalisasiBobot[$no-1]=array(
														$MatrikNormalisasi[$no-1][0]*$W1,
														$MatrikNormalisasi[$no-1][1]*$W2,
														$MatrikNormalisasi[$no-1][2]*$W3,
														$MatrikNormalisasi[$no-1][3]*$W4,
														$MatrikNormalisasi[$no-1][3]*$W5,
														$MatrikNormalisasi[$no-1][4]*$W6 );

														?>
														<tr>
															<td><center><?php echo "A",$no ?></center></td>
															<td><center><?php echo round($MatrikNormalisasi[$no-1][0]*$W1,6) ?></center></td>
															<td><center><?php echo round($MatrikNormalisasi[$no-1][1]*$W2,6) ?></center></td>
															<td><center><?php echo round($MatrikNormalisasi[$no-1][2]*$W3,6) ?></center></td>
															<td><center><?php echo round($MatrikNormalisasi[$no-1][3]*$W4,6) ?></center></td>
															<td><center><?php echo round($MatrikNormalisasi[$no-1][4]*$W5,6) ?></center></td>
															<td><center><?php echo round($MatrikNormalisasi[$no-1][5]*$W6,6) ?></center></td>
														</tr>
														<?php
														$no++;
													}
													?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</li>
						</ul>


						<center>
							<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #FFFFFF;">Matrik Solusi ideal positif dan negatif
							</h4>
						</center>
						<ul>
							<li>
								<div class="row">
									<div class="card" style="border-radius: 20px;">
										<div class="card-content">
											<h5 style="margin-bottom: 16px; margin-top: -6px;">Matrik Solusi ideal positif "A+" dan negatif "A-"
											</h5>
											<table class="responsive-table">

												<thead style="border-top: 1px solid #d0d0d0;">
													<tr>
														<th><center></center></th>
														<th><center>Y1 (Cost)</center></th>
														<th><center>Y2 (Benefit)</center></th>
														<th><center>Y3 (Benefit)</center></th>
														<th><center>Y4 (Benefit)</center></th>
														<th><center>Y5 (Benefit)</center></th>
														<th><center>Y6 (Benefit)</center></th>
													</tr>
												</thead>
												<tbody>
													<?php
													$NormalisasiBobotTrans = Transpose($NormalisasiBobot);
													?>
													<tr>
														<?php  
														$idealpositif=array(min($NormalisasiBobotTrans[0]),max($NormalisasiBobotTrans[1]),max($NormalisasiBobotTrans[2]),max($NormalisasiBobotTrans[3]),max($NormalisasiBobotTrans[4]),max($NormalisasiBobotTrans[5]));
														?>
														<td><center><?php echo "Y+" ?> </center></td>
														<td><center><?php echo(round(min($NormalisasiBobotTrans[0]),6));?>&nbsp(min)</center></td>
														<td><center><?php echo(round(max($NormalisasiBobotTrans[1]),6));?>&nbsp(max)</center></td>
														<td><center><?php echo(round(max($NormalisasiBobotTrans[2]),6));?>&nbsp(max)</center></td>
														<td><center><?php echo(round(max($NormalisasiBobotTrans[3]),6));?>&nbsp(max)</center></td>
														<td><center><?php echo(round(max($NormalisasiBobotTrans[4]),6));?>&nbsp(max)</center></td>
														<td><center><?php echo(round(max($NormalisasiBobotTrans[5]),6));?>&nbsp(max)</center></td>
													</tr>
													<tr>
														<?php  
														$idealnegatif=array(max($NormalisasiBobotTrans[0]),min($NormalisasiBobotTrans[1]),min($NormalisasiBobotTrans[2]),min($NormalisasiBobotTrans[3]),min($NormalisasiBobotTrans[4]),min($NormalisasiBobotTrans[5]));
														?>
														<td><center><?php echo "Y-" ?> </center></td>
														<td><center><?php echo(round(max($NormalisasiBobotTrans[0]),6));?>&nbsp(max)</center></td>
														<td><center><?php echo(round(min($NormalisasiBobotTrans[1]),6));?>&nbsp(min)</center></td>
														<td><center><?php echo(round(min($NormalisasiBobotTrans[2]),6));?>&nbsp(min)</center></td>
														<td><center><?php echo(round(min($NormalisasiBobotTrans[3]),6));?>&nbsp(min)</center></td>
														<td><center><?php echo(round(min($NormalisasiBobotTrans[4]),6));?>&nbsp(min)</center></td>
														<td><center><?php echo(round(min($NormalisasiBobotTrans[5]),6));?>&nbsp(min)</center></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</li>
						</ul>


						<center>
							<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #FFFFFF;">Jarak antara nilai terbobot setiap alternatif terhadap solusi ideal positif												
							</h4>
						</center>
						<ul>
							<li>
								<div class="row">
									<div class="card" style="margin-left: 320px;margin-right: 320px;border-radius: 20px;">
										<div class="card-content">
											<table class="responsive-table" >

												<thead style="border-top: 1px solid #d0d0d0;">
													<tr>
														<th><center>D+</center></th>
														<th><center></center></th>
														<th><center>D-</center></th>
														<th><center></center></th>
													</tr>
												</thead>
												<tbody>
													<?php
													$query=mysqli_query($selectdb,"SELECT * FROM daftar_laptop");
													$no=1;
													$Dplus=JarakIplus($idealpositif,$NormalisasiBobot);
													$Dmin=JarakIplus($idealnegatif,$NormalisasiBobot);
													while ($daftar_laptop=mysqli_fetch_array($query)) {

														?>
														<tr>
															<td><center><?php echo "D",$no ?></center></td>
															<td><center><?php echo round($Dplus[$no-1],6) ?></center></td>
															<td><center><?php echo "D",$no ?></center></td>
															<td><center><?php echo round($Dmin[$no-1],6) ?></center></td>
														</tr>
														<?php
														$no++;
													}
													?>
												</tbody>
											</table>

										</div>
									</div>
								</div>
							</li>
						</ul>


						<center>
							<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #FFFFFF;">Nilai Preferensi untuk Setiap alternatif (V)												
							</h4>
						</center>
						<ul>
							<li>
								<div class="row">
									<div class="card" style="margin-left: 320px;margin-right: 320px;border-radius: 20px;">
										<div class="card-content">
											<table class="responsive-table" >

												<thead style="border-top: 1px solid #d0d0d0;">
													<tr>
														<th><center>Nilai Preferensi "V"</center></th>
														<th><center>Nilai</center></th>
													</tr>
												</thead>
												<tbody>
													<?php
													$query=mysqli_query($selectdb,"SELECT * FROM daftar_laptop");
													$no=1;
													$nilaiV = array();
													while ($daftar_laptop=mysqli_fetch_array($query)) {
														
														array_push($nilaiV, $Dmin[$no-1]/($Dmin[$no-1]+$Dplus[$no-1]));
														?>
														<tr>
															<td><center><?php echo "V",$no ?></center></td>
															<td><center><?php echo $Dmin[$no-1]/($Dmin[$no-1]+$Dplus[$no-1]); ?></center></td>
														</tr>
														<?php
														$no++;
													}

													?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</li>
						</ul>


						<center>
							<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #FFFFFF;">Nilai Preferensi tertinggi
							</h4>
						</center>
						<ul>
							<li>
								<div class="row">
									<div class="card" style="margin-left: 300px;margin-right: 300px; border-radius: 20px;">
										<div class="card-content">
											<table class="responsive-table" >

												<thead style="border-top: 1px solid #d0d0d0;">
													<tr>
														<th><center>Nilai Preferensi tertinggi</center></th>
														<th></th>
														<th><center>Alternatif terpilih</center></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<?php
														$testmax = max($nilaiV);
														for ($i=0; $i < count($nilaiV); $i++) { 
															if ($nilaiV[$i] == $testmax) {
																$query=mysqli_query($selectdb,"SELECT * FROM daftar_laptop where id = $i+1");
																?>
																<td><center><?php echo "V".($i+1); ?></center></td>
																<td><center><?php echo $nilaiV[$i]; ?></center></td>
																<?php while ($user=mysqli_fetch_array($query)) { ?>
																<td><center><?php echo $user['merk']; ?></center></td>
																<td><center><?php echo $user['seri']; ?></center></td>
																<?php
															}
														}
													} ?>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</li>
					</ul>					
					<div class="row center" \>
						<a href="model.php" id="download-button" class="waves-effect waves-light btn" style="margin-top: 0px;">Hitung Rekomendasi Ulang</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Daftar Laptop End -->

		<!-- Body End -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('.parallax').parallax();
				$('.modal').modal();
			});
		</script>
	</body>
	</html>