<?php session_start();
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
	<style type="text/css">
	
	table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
	</style>
</head>
<body itemscope itemtype="http://schema.org/AboutPage">
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
								 <li><a href="programm.php">PROGRAMMES</a></li>
								  <li><a href="facili.php">FACILITIES</a></li>
								  <li><a href="mou.php">MOU</a></li>
								  <li><a href="faculty.php">FACULTY</a></li>
								<li><a href="gallery.php">GALLERY</a></li>	
								<li><a href="event.php">EVENTS</a></li>								
								<li><a href="notes.php">SYLLABUS</a></li>									
								<li><a href="contact.html">CONTACT</a></li>
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
	 
		<section class="about-upper-section" itemprop="mainContentofPage">
			<div class="container">
				<article class="who-we-are">
					<h2 class="top-heading">SYLLABUS DOWNLOAD :2Year  (PG)</h2>
					 
					 
					<Center>				
					
					
					<table border="0">
					 
					 			 
					<tr style="font-size:16px; color:#FFFFFF; font-weight:bold; text-transform:uppercase; background:#0066FF"> <td>Semester</td><td>Notes</td></tr>
				
					<?php
$result=mysql_query("Select * from tb_note where eyear='2-Year' and cat='PG'");
  
	while ($row = mysql_fetch_array($result))
          {
		     $im=$row[file];
		  ?>
		    	<tr bgcolor="#FFFFFF" style="color:#003399; font-size:18px" height="50px">
				 
				<td ><?php echo $row["sem"];?></td>
				 
          <td ><?php echo "<a href=admin/home/$im>$im</a>";?></td>
		  </tr>
		 
		  
		 <?php
	}
	?>				</table>
					
								 
						
				<br><br><br>		
					 
				</article>
				 
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