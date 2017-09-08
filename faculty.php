<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SriHarsha S">

    <title>SJCE CS | Faculty</title>

    <!-- Theme CSS -->
    <link href="css/base_styles.css" rel="stylesheet">
	<link href="css/faculty.css" rel="stylesheet">
	
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
				<li class="nav-item nav-active"><a href="faculty.php">Faculty</a></li>
				<li class="nav-item"><a href="courses.php">Courses</a></li>
				<li class="nav-item"><a href="timetable.php">Timetable</a></li>
				<li class="nav-item"><a href="events.php">Events</a></li>
				<li class="nav-item"><a href="facilities.php">Facilities</a></li>
				<li class="nav-item"><a href="achievements.php">Achievements</a></li>
				<li class="nav-item"><a href="alumni.php">Alumni</a></li>
				<li class="nav-item"><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>
		<div id="page_heading">
			<p>Faculty</p>
		</div>
		<div id="bread_crumbs">
			<p>Faculty > Overview</p>
		</div>
		<!-- Main Content -->
		<?php
			include('php/config.php');
			require_once "php/variables.php";
			$allfacs = mysqli_query($db, "SELECT * FROM $tbl_faculty;");
		?>
		<div class="container">
			<div class="sidenav">
				<div class="panel-header-silver">
					<h2>List of faculty</h2>
				</div>
				<div class="sidenav-item sidenav-active" data-tab="Overview" >
					Overview
				</div>
				<hr>
				<?php
					$index=1;
					while($row=mysqli_fetch_array($allfacs,MYSQLI_ASSOC)){
						echo "<div class=\"sidenav-item\" data-tab=\"Faculty".$index."\">".$row['name']."</div>";
						$index++;
					}
				?>
			</div>
			<div class="center_content">
				<div id="Overview" class="content_panel">
					<div class="panel-header-blue">
						<h2>Overview</h2>
					</div>
					<div style="width:100%;">
						<img id="fac_img" src="images/allfaculty.jpg" alt="faculty" style="height:320px;width:95%;display:block;margin:10px auto !important;">
					</div>
					<div style="padding:20px;">
						<p>Department of Computer Science and Engineering, SJCE boasts of highly qualified, 
						passionate professors who not only guide students towards an illustrious career, 
						but also take up innovative research work in the emerging new fields of Computer Science. 
						The enthusiasm and dedication of our teachers is truly a blessing to the institution 
						and the end results can be seen when students from the department of CSE get paid 
						handsomely during the placements. SJCE CS department students are among the highest, 
						if not the highest paid in the IT industry today from Mysuru, thanks to the guidance 
						and innovative projects provided by our faculty.</p>
					</div>	
				</div>
				<?php
					$index=1;
					mysqli_data_seek($allfacs,0);
					while($row=mysqli_fetch_array($allfacs,MYSQLI_ASSOC)){
						echo "<div id=\"Faculty".$index."\" class=\"content_panel\" style=\"display:none;\">";
						echo "<div class=\"panel-header-blue\">";
						echo "<h2>Faculty Details</h2></div>";
						echo "<div style=\"padding:20px;overflow:hidden;\">";
						echo "<div id=\"facImgHold\"><div style=\"margin:0 auto;\">";
						echo "<img id=\"facImg\" src='".$row['image']."' width='100px' height='100px'>";
						echo "</div><h2 id=\"facName\">".$row['name']."</h2></div>";
						echo "<div id=\"facDets\">";
						echo "<b>Designation</b>: ".$row['designation']."<br>";
						echo "<b>Education</b>: ".$row['education']."<hr>";
						echo "<b>Research Interests</b>: ".$row['interest']."<br>";
						echo "<b>Specialisation</b>: ".$row['specialization']."<br><hr>";
						echo "<b>Email</b>: ".$row['email']."<br>";
						echo "</div></div></div>";
						$index++;
					}
				?>
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
	</div>
</body>

</html>
