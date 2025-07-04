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
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body itemscope itemtype="http://schema.org/AboutPage">
	<div id="page" class="site">
		<header class="site-header">
			<div class="top-header" style="background:rgb(255, 255, 255)">
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
			<div class="main-header" style="background:#DB4622">
				<div class="container">
					<div class="logo-wrap">
						
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								 	 
							<li><a href="index.html" style="font-size:12px;padding:8px;color:#FFFFFF; font-weight:bold" >HOME</a></li>
								 
								 <li><a href="about.html" style="font-size:12px;padding:8px;color:#FFFFFF; font-weight:bold">ABOUT</a></li>
								  <li><a href="programm.php" style="font-size:12px;padding:8px;color:#FFFFFF; font-weight:bold">PROGRAMMES</a></li>
								   <li><a href="facili.php" style="font-size:12px;padding:8px;color:#FFFFFF; font-weight:bold">FACILITIES</a></li>
								   <li><a href="mou.php" style="font-size:12px;padding:8px;color:#FFFFFF; font-weight:bold">MOU</a></li>
								   <li><a href="faculty.php" style="font-size:12px;padding:8px;color:#FFFFFF; font-weight:bold">FACULTY</a></li>
								 <li><a href="gallery.php" style="font-size:12px;padding:8px;color:#FFFFFF; font-weight:bold">GALLERY</a></li>	
								 <li><a href="event.php" style="font-size:12px;padding:8px;color:#FFFFFF; font-weight:bold">EVENTS</a></li>								
								 <li><a href="notes.php" style="font-size:12px;padding:8px;color:#FFFFFF; font-weight:bold">SYLLABUS</a></li>
								 <li><a href="econtent.php" style="font-size:12px;padding:8px;color:#FFFFFF; font-weight:bold">ECONTENT</a></li>									
								 <li><a href="contact.html" style="font-size:12px;padding:8px;color:#FFFFFF; font-weight:bold">CONTACT</a></li>
							 </ul>
							 
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
		<!-- Header Close -->
		 
			<div class="container">
				
				
			</div>
			 <div id="owl-four-nav" class="owl-nav"></div>
		</div>
	 
		 

		<section class="team-members" itemprop="contributor">
			<div class="container">
				<h2 class="top-heading">FACULTIES - COMPUTER SCIENCE</h2>
				<article class="developer-grid">
				
				
				  <?php
$result=mysql_query("Select * from tb_staff ");
  
	while ($row = mysql_fetch_array($result))
          {
		   $im=$row[img];
		   $im1=$row[img1];
		  ?>
				
					<div class="developer-wrap">
					<a href="admin/home/<?php echo $im1;?>"><img src="admin/home/<?php echo $im;?>"  alt="developer images"></a>
						 
						<h3 style="color:#0033CC"><?php echo $row['ename'];?></h3>
						<h3 style="color:#FFFFFF; background:#00CC66"><?php echo $row['que'];?></h3>
						 	<h3 style="color:#FFFFFF; background:#00CC66"><?php echo $row['cat'];?></h3>
					</div>

					<?php
	}
	?>		 

					 

					 
 
				</article>
			</div>
		</section>
		<!-- Team Members Closed  -->

		<section class="what-other-say">
			 
		</section>
		<!-- End of Others talk -->

		 
		<!-- End of Query Section -->
		 	<footer class="page-footer" itemprop="footer" itemscope itemtype="#">
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
		</footer>

		<!-- <nav id="menu">
			<ul>
				<li><a href="#">HOME</a></li>
				<li>
					<span>COURSES</span>
					<ul>
						<li><a href="#/courses/child">Child</a></li>
						<li><a href="#/courses/child">Child</a></li>
						<li>
							<span>Child</span>
							<ul>
								<li><a href="#/courses/child/grandChild">Grand Child</a></li>
								<li><a href="#/courses/child/grandChild">Grand Child</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">gallery</a>
					<ul>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
					</ul>
				</li>
				<li>
					<a href="#">news</a>
					<ul>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
					</ul>
				</li>
				<li><a href="#">about</a></li>
				<li><a href="#">contact</a></li>
			</ul>
		</nav> -->

	</div>
		</footer>
	</div>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>