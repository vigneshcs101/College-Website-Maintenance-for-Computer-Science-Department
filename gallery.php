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
				<div class="container" >
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
		<!-- <div class="banner">
			<div class="owl-five owl-carousel owl-theme">
	            <div class="item-video">
            		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            		</iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
            		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            		</iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
          </div>
		</div> -->
		<!-- Banner Close -->

		<section class="gallery-section2">
			<div class="container">
				<div id="filters" class="button-group">
					<button class="button" data-filter="*">All GALLERY</button>
  					
				</div>
			</div>
			
				<section class="gallery-images-section gallery2" id="cGrid">
			
		  <?php
$result=mysql_query("Select * from tb_photo ");
  
	while ($row = mysql_fetch_array($result))
          {
		   $im=$row[img];
		  ?>	
		  		<div class="gallery-img-wrap grid-item business" data-category="business">
					
						<a href="admin/home/<?php echo $im;?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="admin/home/<?php echo $im;?>" alt="gallery-images" style="height:350px; width:350px">
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
