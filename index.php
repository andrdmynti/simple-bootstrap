<!DOCTYPE html>
<html>
<head>
	<title>Simple Bootstrap</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
	<script src="boostrap/js/bootstrap.min.js"></script>

	<style type="text/css">
	    .row {
	    	padding-bottom: 100px;
	    	padding-top: 100px;
	    }
	    .footer {
	    	padding-top: 10px; 
	    	padding-bottom: 10px;
	    }
	</style>

</head>
<body>

	<!-- Navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				    <span class="sr-only">Toggle navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</button>
			</div>

			<!-- Navbar MENU -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
				    <li>
				        <a href="#">
				            <span class="glyphicon glyphicon-home"></span>
				            Home
				        </a>
				    </li>
				    <li>
				        <a href="#">
				        	<span class="glyphicon glyphicon-user"></span>
				            Profile
				        </a>
				    </li>
				    <li>
				        <a href="#">
				            <span class="glyphicon glyphicon-picture"></span>
				            Galeri
				        </a>
				    </li>
				    <li>
				        <a href="#">
				            <span class="glyphicon glyphicon-phone"></span>
				            kontak
				        </a>
				    </li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Isi Konten -->
	<div class="container">
		<div class="row">
			<center>
				<h2>Contoh Wells</h2>
			</center>
			<br><<br><br><br>
			<div class="col-md-1">
				
			</div>
			<div class="col-md-3">
				<center>
					<div class="well well-sm">
						Ini adalah isi dari kolom pertama dengan well small
					</div>
				</center>
			</div>
			<div class="col-md-4">
				<center>
					<div class="well">
						Ini adalah isi dari kolom kedua dengan well standar
					</div>
				</center>
			</div>
			<div class="col-md-3">
				<center>
					<div class="well well-lg">
						Ini adalah isi dari kolom ketiga dengan well large
					</div>
				</center>
			</div>
			<div class="col-md-1">
				
			</div>
		</div>
	</div>
	<br><br>

	<!-- Footer -->
	<footer class="footer" style="background: black;">
		<div class="container">
			<div class="col-md-12">
				<center>
					<font color="white">Copyrigth &copy; : andrdmynti</font>
				</center>
			</div>
		</div>
	</footer>

</body>
</html>