<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Beranda Mahasiswa</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="../assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="../assets/css/portal.css">

</head> 

<body class="app">   	
    <header class="app-header fixed-top">	   	            
        <div class="app-header">  
	        <div class="container-fluid py-2">
            <?php 
				session_start();
				if($_SESSION['status']!="login"){
					header("location:../login.php?pesan=belum_login");
				}
				?>	
				<h5 style="margin-top: 4px;">Selamat datang, <?php echo $_SESSION['nim']; ?>! anda telah login. <a href="logout.php" class="btn btn-danger" style="float: right;">Keluar</a></h5>
	        </div><!--//container-fluid-->
        </div>
    </header>

    <div class="app" style="margin-top: -70px;">
		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">
				<h1 class="app-page-title">Soal</h1>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima veritatis quisquam aut maxime reiciendis doloribus nesciunt recusandae nihil voluptas? Aliquam cum repudiandae expedita velit id, quam dicta minus nostrum rerum.
                </p>
                <br>

                <p>
                    Taruh CMD Disini
                </p>
                
			</div><!--//inner-->
		</div><!--//app-card-->
    </div>
    <footer class="app-footer">
		<div class="container text-center py-3">
		    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i></small>
		</div>
	</footer><!--//app-footer-->

    </div><!--//app-wrapper-->    					

    <!-- Javascript -->          
    <script src="../assets/plugins/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="../assets/plugins/chart.js/chart.min.js"></script> 
    <script src="../assets/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="../assets/js/app.js"></script> 

</body>
</html>