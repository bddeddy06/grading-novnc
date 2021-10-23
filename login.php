<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Login</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app app-login p-0"> 
    <div class="row g-0 app-auth-wrapper">
		<div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
			<div class="d-flex flex-column align-content-end">
				<div class="app-auth-body mx-auto">	
					<div class="app-auth-branding mb-4"><a class="app-logo" href="index.php"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5">Login Dulu</h2>
					<?php 
						if(isset($_GET['pesan'])){
							if($_GET['pesan'] == "gagal"){
								echo "Login gagal! username dan password salah!";
							}else if($_GET['pesan'] == "logout"){
								echo "Anda telah berhasil logout ";
							}else if($_GET['pesan'] == "belum_login"){
								echo "Anda harus login untuk mengakses halaman admin";
							}
						}
					?>
					
					<div class="auth-form-container text-start">
					<form class="auth-form login-form" method="POST" action="cek-login.php">         
							<div class="email mb-3">
								<label class="sr-only" for="username">NIM</label>
								<input id="username" name="username" type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" required="required">
							</div><!--//form-group-->
							<div class="password mb-3">
								<label class="sr-only" for="password">Password</label>
								<input id="signin-password" name="password" type="password" class="form-control " placeholder="Password Sesi" required="required">
									<div class="extra mt-3 row justify-content-between">
										<div class="col-6">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
												<label class="form-check-label" for="RememberPassword">
												Ingat Saya
												</label>
											</div>
										</div><!--//col-6-->
										<div class="col-6">
											<!-- <div class="forgot-password text-end">
												<a href="reset-password.html">Lupa Password</a>
											</div> -->
										</div><!--//col-6-->
									</div><!--//extra-->
								</div><!--//form-group-->
								<div class="text-center">
									<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto" value="LOGIN">Masuk</button>
								</div>
								</form>
						
						<!-- <div class="auth-option text-center pt-5">No Account? Sign up <a class="text-link" href="signup.html" >here</a>.</div> -->
					</div><!--//auth-form-container-->	
				</div><!--//auth-body-->
				<footer class="app-auth-footer">
					<div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
					<small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> </small>
					</div>
				</footer><!--//app-auth-footer-->	
			</div><!--//flex-column-->   
		</div><!--//auth-main-col-->
		<div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
			<div class="auth-background-holder">
			</div>
			<div class="auth-background-mask"></div>
			<div class="auth-background-overlay p-3 p-lg-5">
				<div class="d-flex flex-column align-content-end h-100">
					<div class="h-100"></div>
				</div>
			</div><!--//auth-background-overlay-->
	</div><!--//auth-background-col-->
	</div><!--//row-->


</body>
</html> 

