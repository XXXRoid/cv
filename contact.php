<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>SolMusic | HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="SolMusic HTML Template">
	<meta name="keywords" content="music, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php include('content/template/header.php'); ?>
	<!-- Header section end -->

	<!-- Contact section -->
	<section class="contact-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 p-0">
					<!-- Map -->
					<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.089081311272!2d107.609829014743!3d-6.879930895028438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6fa25ff2a15%3A0x4155f444d93fbe14!2sJl.%20Cisitu%20Lama%2C%20Dago%2C%20Kecamatan%20Coblong%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040135!5e0!3m2!1sid!2sid!4v1576813201399!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="contact-warp">
						<div class="section-title mb-0">
							<h2>Get in touch</h2>
						</div>
						<p>Contact me for asking something or request. </p>
						<ul>
							<li>Dago, bandung</li>
							<li>###########</li>
							<li>Dhikayokim@gmail.com</li>
						</ul>
						<form class="contact-from" >
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Your name" name="name">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Your e-mail" name="email">
								</div>
								<div class="col-md-12">
									<input type="text" placeholder="Subject" name="Subject">
									<textarea placeholder="Message" name="message"></textarea>
									<button class="site-btn">send message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

	<!-- Footer section -->
<?php include('content/template/footer.php'); ?>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
