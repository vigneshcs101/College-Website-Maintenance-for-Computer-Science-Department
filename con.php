<?php
include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>education</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="page" class="site">
		<header class="site-header">
			<div class="top-header" style="background:#FFFFFF">
				<div class="container">
					<div class="top-header-left">
						 
						 
					</div>
					<div class="top-header-right" ><img src="images/ban.png">
						</div>
						<div class="login-block">
						
						
							 
						</div>
					</div>
				</div>
			<!-- Top header Close -->
			<div class="main-header" style="background:#FF6600">
				<div class="container">
					<div class="logo-wrap">
						
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								<li><a href="index.html">HOME</a></li>
								 
								<li><a href="about.html">ABOUT</a></li>
								<li class="menu-parent">ACTIVITY
									<ul class="sub-menu">
										<li><a href="nss.php">NSS</a></li>
										<li><a href="yrc.php">YRC</a></li>
										 <li><a href="sports.php">SPORTS</a></li> <li><a href="exnor.php">EXNORA CLUB</a></li>
									</ul>
								</li>
								 
								<li class="menu-parent">GALLERY
									<ul class="sub-menu">
										<li><a href="con.php">Conference</a></li>
										<li><a href="seminar.php">Seminar</a></li>
									    <li><a href="event.php">Club Event</a></li> 
									</ul>
								</li>
								 
								
								<li><a href="faculty.php">FACULTY</a></li>
								<li class="menu-parent">BATCH	
									<ul class="sub-menu">
										<li><a href="b1year.php">I-Year</a></li>
										<li><a href="b2year.php">II-Year</a></li>
										 <li><a href="b3year.php">III-Year</a></li>  
									</ul>
								</li>
								<li><a href="notes.php">SYLLABUS</a></li>	
								
								<li><a href="contact.html">CONTACT</a></li>
								<li><a href="admin/">LOGIN</a></li>
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
		 

		<section class="gallery-section2">
			<div class="container">
				<div id="filters" class="button-group">
					<button class="button" data-filter="*">Conference</button>
  					
				</div>
			</div>
			
				<section class="gallery-images-section gallery2" id="cGrid">
			
		  <?php
$result=mysql_query("Select * from tb_photo where cat='Conference' ");
  
	while ($row = mysql_fetch_array($result))
          {
		   $im=$row[img];
		  ?>	
		  		<div class="gallery-img-wrap grid-item business" data-category="business">
					
						<a href="admin/home/<?php echo $im;?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="admin/home/<?php echo $im;?>" alt="gallery-images" style="height:150px; width:250px">
						</a>
					</div>
						<?php
	}
	?>		
					 
					 
				</section>
				
				<!-- End of gallery Images -->				
		</section>
		<section class="query-section">
			<div class="container">
			 
			</div>
		</section>
		<!-- End of Query Section -->
		<footer class="page-footer">
			<div class="footer-first-section">
				<div class="container">
					 

					 
 

				</div>
			</div>
			<!-- End of box-Wrap -->
			<div class="footer-second-section">
				<div class="container">
					<hr class="footer-line">
					<ul class="social-list">
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-skype"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
					</ul>
					<hr class="footer-line">
				</div>
			</div>
			<div class="footer-last-section">
				<div class="container">
					<p>Copyright 2025 &copy; educationpro.com <span>  </p>
				</div>
			</div>
			</div>
		</footer>
	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
