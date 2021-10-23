<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Beranda</title>
    
    <?php include 'templates/head.php'; ?>
</head> 

<body class="app">
	
    <?php include 'templates/navsidebar.php' ?>
    
    <div class="app-wrapper">
		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">
				<h1 class="app-page-title">Beranda</h1>
			</div><!--//inner-->
		</div><!--//app-card-->
	
		<div class="row g-4 mb-4" style="margin-left: 30px;">
			<div class="col-6 col-lg-3">
				<div class="app-card app-card-stat shadow-sm h-100">
					<div class="app-card-body p-3 p-lg-4">
						<h4 class="stats-type mb-1">Peserta Ujian</h4>
							<div class="stats-figure">
								123
							</div>
					</div><!--//app-card-body-->
						<a class="app-card-link-mask" href="#"></a>
				</div><!--//app-card-->
			</div><!--//col-->
			<div class="col-6 col-lg-3">
				<div class="app-card app-card-stat shadow-sm h-100">
					<div class="app-card-body p-3 p-lg-4">
						<h4 class="stats-type mb-1">Telah Mengikuti Ujian</h4>
							<div class="stats-figure">
								23
							</div>
						</div><!--//app-card-body-->
							<a class="app-card-link-mask" href="#"></a>
					</div><!--//app-card-->
				</div><!--//col-->
			<div class="col-6 col-lg-3">
				<div class="app-card app-card-stat shadow-sm h-100">
					<div class="app-card-body p-3 p-lg-4">
						<h4 class="stats-type mb-1">Tidak Mengikuti Ujian</h4>
							<div class="stats-figure">
								6
							</div>
						</div><!--//app-card-body-->
							<a class="app-card-link-mask" href="#"></a>
					</div><!--//app-card-->
				</div><!--//col-->
			</div><!--//row-->
		</div>

		
		
    </div><!--//app-wrapper-->
	
	<?php include 'templates/footer.php' ?>

    <?php include 'templates/scripts.php '?>

</body>
</html> 

