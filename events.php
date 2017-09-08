<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SriHarsha S">

    <title>SJCE CS | News & Events</title>

    <!-- Theme CSS -->
    <link href="css/base_styles.css" rel="stylesheet">
	<link href="css/events.css" rel="stylesheet">
	<link href="css/accordian.css" rel="stylesheet">
	
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
				<li class="nav-item nav-active"><a href="events.php">Events</a></li>
				<li class="nav-item"><a href="facilities.php">Facilities</a></li>
				<li class="nav-item"><a href="achievements.php">Achievements</a></li>
				<li class="nav-item"><a href="alumni.php">Alumni</a></li>
				<li class="nav-item"><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>
		<div id="page_heading">
			<p>News &amp; Events</p>
		</div>
		<div id="bread_crumbs">
			<p>News &amp; Events > News</p>
		</div>
		<!-- Main Content -->
		<div class="container">
			<div class="sidenav">
				<div class="panel-header-silver">
					<h2>Upcoming</h2>
				</div>
				<div class="sidenav-item sidenav-active" data-tab="News" >
					News
				</div>
				<div class="sidenav-item" data-tab="Events">
					Events
				</div>
			</div>
			<div class="center_content">
				<div id="Events" class="content_panel" style="display:none;">
					<div class="panel-header-blue">
						<h2>Events</h2>
					</div>
					<div style="padding:5px 20px 20px 20px;">
						<?php
							include('php/config.php');
							require_once "php/variables.php";
							$result = mysqli_query($db, "SELECT * FROM $tbl_events ORDER BY date desc;");
							while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
							{
								$yrdata= strtotime($row['date']);
								$date = date('d-M-Y', $yrdata);
								echo "<div class=\"acc event-panelB\"><div class=\"event-vis\"><div class=\"event-imgB\">";
								echo "<img src=\"".$row['image']."\" width='100px' height='100px'/></div>";
								echo "<div class=\"event-detsB\"><div class=\"event-headB\">";
								echo "<img src=\"images/cal_icon.png\" width=\"20px\" height=\"20px\" style=\"margin:0px 5px 0px 0px;\">";
								echo "<span>".$date."</span>";
								echo "<img src=\"images/loc_icon.png\" width=\"20px\" height=\"20px\" style=\"margin:0px 5px 0px 50px;\">";
								echo "<span>".$row['location']."</span>";
								echo "<div class=\"accordion\"></div></div>";
								echo "<p class=\"event-det1\">".$row['title']."</p>";
								echo "<p class=\"event-det2\">".$row['min_head']."</p>";
								echo "</div></div>";
							    echo "<div class=\"ac_panel\"><p class=\"event-det3\">".$row['content']."</p></div></div>";
							}
						?>
					</div>
				</div>
				<div id="News" class="content_panel">
					<div class="panel-header-blue">
						<h2>News</h2>
					</div>
					<div style="padding:5px 20px 20px 20px;">
						<?php
							$result = mysqli_query($db, "SELECT * FROM $tbl_news ORDER BY date_added desc;");
							while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
							{
								echo "<div class=\"acc news-panelB\"><div class=\"news-vis\"><div class=\"news-imgB\">";
								echo "<img src=\"".$row['image']."\" width='200px' height='200px'/></div>";
								echo "<div class=\"news-detsB\"><div class=\"news-headB\">";
								echo "<span>".$row['tag1']."</span>\n<span>".$row['tag2']."</span>\n<span>".$row['tag3']."</span>";
								echo "<div class=\"accordion\"></div></div>";
								echo "<p class=\"news-det1\">".$row['title']."</p>";
								echo "<p class=\"news-det2\">".$row['min_cont']."</p></div></div>";
								echo "<div class=\"ac_panel\">";
								echo "<p class=\"news-det3\">".$row['content']."</p>";
								echo "</div></div>";
							}
						?>
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
		<script src="js/sidenav.js"></script>
		<script src="js/accordion2.js"></script>
	</div>
</body>

</html>
