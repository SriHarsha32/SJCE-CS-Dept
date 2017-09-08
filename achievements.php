<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SriHarsha S">

    <title>SJCE CS | Achievements</title>

    <!-- Theme CSS -->
    <link href="css/base_styles.css" rel="stylesheet">
	<link href="css/accordian.css" rel="stylesheet">
	<link href="css/achievements.css" rel="stylesheet">
	
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="mainPart">
		<header>
			<div class="head-content">
				<img src="images/SJCE_Final.png"/>
				<h4>JSS Mahavidyapeetha</h4>
				<h2>Sri Jayachamarajendra College of Engineering</h1>
				<h3>A Commitment to Technical Education</h3>
				<hr style="width:40%;">
				<h1>Department of Computer Science and Engineering</h2>
			</div>
		</header>
		<!-- Navigation -->
		<nav class="x-nav">
			<ul class="nav-custom">
				<li class="nav-item"><a href="index.php">Home</a></li>
				<li class="nav-item"><a href="faculty.php">Faculty</a></li>
				<li class="nav-item"><a href="courses.php">Courses</a></li>
				<li class="nav-item"><a href="timetable.php">Timetable</a></li>
				<li class="nav-item"><a href="events.php">Events</a></li>
				<li class="nav-item"><a href="facilities.php">Facilities</a></li>
				<li class="nav-item nav-active"><a href="achievements.php">Achievements</a></li>
				<li class="nav-item"><a href="alumni.php">Alumni</a></li>
				<li class="nav-item"><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>
		<div id="page_heading">
			<p>Achievements</p>
		</div>
		<div id="bread_crumbs">
			<p>Achievements > Student achievements</p>
		</div>
		<!-- Main Content -->
		<div class="container">
			<div class="sidenav">
				<div class="panel-header-silver">
					<h2>ACHIEVEMENTS</h2>
				</div>
				<div class="sidenav-item sidenav-active" data-tab="Student" >
					Students Achievements
				</div>
				<div class="sidenav-item" data-tab="Placement">
					Placement Achievements
				</div>
			</div>
			<div class="center_content">
				<div id="Student" class="content_panel">
					<div class="panel-header-blue">
						<h2>Students Achievements</h2>
					</div>
					<div style="padding:20px;">
						<?php
							include 'php/config.php';
							require_once 'php/variables.php';
							$sql = "SELECT title,content FROM $tbl_achievements ORDER BY date_added desc";
							$result = mysqli_query($db,$sql);
							$rowcount = mysqli_num_rows($result);
							if ($rowcount > 0) {
								// output data of each row
								while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
									$title=$row['title'];
									$content=$row['content'];
									echo "<div class=\"acc\">";
									echo "<button class=\"accordion\">".$title."</button>";
									echo "<div class=\"ac_panel\"><p class=\"ach_dets\">".$content."</p>";
									echo "</div></div>";
								}
							} else {
								echo "<div class=\"acc\">No results</div>";
							}

						?>
					</div>
				</div>
				<div id="Placement" class="content_panel" style="display:none;">
					<div class="panel-header-blue">
						<h2>Placement Achievements</h2>
					</div>
					<div style="padding:20px;">
						<div>
							<img src='images/offers.png' alt="No. of offers" style="height:320px;width:95%;display:block;margin:10px auto !important;"/>
							</br>
							<div id="companies">
								<h2>Our Esteemed recruiters</h2>
								<div id="complist">
									<div class="comp-img">
										<img src="images/recruiters/avaya.png" width="60px" height="60px" alt="Avaya" title="Avaya">
									</div>
									<div class="comp-img">
										<img src="images/recruiters/cisco.png" width="60px" height="60px" alt="Cisco" title="Cisco">
									</div>
									<div class="comp-img">
										<img src="images/recruiters/flipkart.png" width="60px" height="60px" alt="Flipkart" title="Flipkart">
									</div>
									<div class="comp-img">
										<img src="images/recruiters/Google.png" width="60px" height="60px" alt="Google" title="Google">
									</div>
									<div class="comp-img">
										<img src="images/recruiters/intel.png" width="60px" height="60px" alt="Intel" title="Intel">
									</div>
									<div class="comp-img">
										<img src="images/recruiters/microsoft.png" width="60px" height="60px" alt="Microsoft" title="Microsoft">
									</div>
									<div class="comp-img">
										<img src="images/recruiters/tcs.png" width="60px" height="60px" alt="TCS" title="Tata Consultancy Services">
									</div>
									<div class="comp-img">
										<img src="images/recruiters/vmware.png" width="60px" height="60px" alt="VMWare" title="VMWare">
									</div>
									<div class="comp-img">
										<img src="images/recruiters/wipro.png" width="60px" height="60px" alt="Wipro" title="Wipro">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer -->
		<footer>
			<div class="footrow">
				<div class="foot">
					<div class="quarter-width">
						<p style="color:#fff;">Address</p>
						<hr>
						<div>
							Golden Jubliee Bhavan,Sri Jayachamarajendra College of Engineering, JSS TI Campus, Manasagangotri, Mysore -570006
							<hr>
							Phone: 0821- 2548285, 2548286, 2548289
							<hr>
							Email: <a href="mailto:admn@sjce.ac.in">admn@sjce.ac.in</a>
						</div>
					</div>
					<div class="quarter-width">
						<p style="color:#fff;">Quick Links</p>
						<hr>
						<a href="http://sjceplacements.org">SJCE Placements</a><br>
						<a href="http://lccsjce.org">LCC SJCE</a><br>
						<a href="http://sjce.ac.in">SJCE Official Website</a><br>
					</div>
					<div class="quarter-width">
						<p style="color:#fff;">Follow Us</p>
						<hr>
						<div id="social2">
                            <div class="sc-icn2">
                                <a href="https://www.facebook.com/SJCE.Mysore.India" target="_blank"><img src="images/social/facebook.png" width="50px" height="50px" alt="facebook" title="SJCE Mysuru"></a>
                            </div>
                            <div class="sc-icn2">
                                <a href="https://www.twitter.com/@jcedboard" target="_blank"><img src="images/social/twitter.png" width="50px" height="50px" alt="twitter" title="@JCEdBoard"></a>
                            </div>
                            <div class="sc-icn2">
                                <a href="https://www.instagram.com/sjce_photography/" target="_blank"><img src="images/social/instagram2.png" width="50px" height="50px" alt="instagram" title="SJCE Photography"></a>
                            </div>
                        </div>
					</div>
					<div class="quarter-width">
						<p style="color:#fff;">Report</p>
						<hr>
						<a href="#">Found a Bug</a><br>
						<a href="#">Feedback</a><br>
						<a href="#">Request feature</a><br>
					</div>
				</div>
			</div>
			<div class="footrow2">
				<div class="foot">
					<div class="half-width">
						<p class="foot-p">&copy; SJCE Mysore - 2017 | All rights reserved</p>
					</div>
					<div class="half-width">
						<p style="float:right !important;" class="foot-p">Developed &amp; maintained "Code Ninjas"</p>
					</div>
				</div>
			</div>
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/accordion2.js"></script>
		<script src="js/sidenav.js"></script>
	</div>
</body>

</html>
