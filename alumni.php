<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SriHarsha S">

    <title>SJCE CS | Alumni</title>

    <!-- Theme CSS -->
    <link href="css/base_styles.css" rel="stylesheet">
	<link href="css/alumni.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
	
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
				<li class="nav-item"><a href="achievements.php">Achievements</a></li>
				<li class="nav-item nav-active"><a href="alumni.php">Alumni</a></li>
				<li class="nav-item"><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>
		<div id="page_heading">
			<p>Alumni</p>
		</div>
		<div id="bread_crumbs">
			<p>Alumni > Overview</p>
		</div>
		<!-- Main Content -->
		<div class="container">
			<div id="snackbar">This is my snackbar</div>
			<div class="sidenav">
				<div class="panel-header-silver">
					<h2>ALUMNI</h2>
				</div>
				<div class="sidenav-item sidenav-active" data-tab="Overview" >
					Overview
				</div>
				<div class="sidenav-item" data-tab="Connect">
					Connect
				</div>
				<div class="sidenav-item" data-tab="Alumni">
					Our Alumni
				</div>
			</div>
			<div class="center_content">
				<div id="Overview" class="content_panel">
					<div class="panel-header-blue">
						<h2>Overview</h2>
					</div>
					<div style="padding:20px;">
						<p style="text-indent:30px;padding:10px;">SJCE Alumni Association was formed during mid eighties and started with one chapter at Bangalore. The association has an Executive Council having 12 members along with a President and Secretary. The Executive Council has formulated the objectives and activities of the association, which include both short term and long-term goals of the association. It has also formulated the Constitution of the SJCE Alumni Association along with bylaws for its effectiveness and sustainability.

						The association has already organized two Alumni meets, one at Mysore and one at Bangalore.

						The Annual Alumni Meet is scheduled to be held on the campus of SJCE during the 4th week of December every year.
						</p>
						<hr>
						<h2 style="padding:10px;text-align:center;">Objectives:</h2>
						<ul style="padding:10px 30px;">
						<li>To establish a sustainable network of globally spread JAYCITES.</li>
						<li>To promote liaison between the alumni and the college.</li>
						<li>To provide a common platform for the alumni of the college.</li>
						<li>To enable the alumni to participate and contribute for the overall development of the institute.</li>
						<li>To contribute significantly for the scientific and technological advancements of the country.</li>
						</ul>
						<hr>
						<h2 style="padding:10px;text-align:center;">Contact info:</h2>

						<p style="padding:10px;">
						<b>Dr. B. S. Harish</b>,</br>
						Associate Professor, Dept. of Information Science and Engineering,</br>
						SJCE, Mysore - 06</br>
						Email Id: fromsjcealumni@gmail.com</br></br></br>
						<b>Mrs. Pushpalatha K</b>,</br>
						SJCE Alumni Association</br>
						Email Id: fromsjcealumni@gmail.com</br>
						</p>
					</div>
				</div>
				<div id="Connect" class="content_panel" style="display:none;">
					<div class="panel-header-blue">
						<h2>Connect with us</h2>
					</div>
					<div style="padding:20px;overflow:hidden;display:block;">
						<form class="form-main" action="php/additem.php">
                            <input type="hidden" name="what" value="alumni" />
							<div class="form-item">
                                <div class="form-left">
                                    <label><big>Full Name:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="fname" id="al_name" size="20" required>
                                </div>
                            </div>
							<div class="form-item">
                                <div class="form-left">
                                    <label><big>Email Address:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="email" name="mail" id="al_email" size="20" required>
                                </div>
                            </div>
							<div class="form-item">
                                <div class="form-left">
                                    <label><big>Year of completion:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="number" name="year" id="al_year" size="4" required>
                                </div>
                            </div>
							<div class="form-item">
                                <div class="form-left">
                                    <label><big>Profession:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="prof" id="al_prof" size="20" required>
                                </div>
                            </div>
							<div class="form-item">
                                <div class="form-left">
                                    <label><big>Company:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="company" id="al_comp" size="20" required>
                                </div>
                            </div>
							<div class="form-item">
                                <div class="form-left">
                                    <label><big>Location:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="location" id="al_locn" size="20" required>
                                </div>
                            </div>
							<div class="form-item">
                                <div class="form-left">
                                    <label><big>Profile Picture:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="file" name="image" id="al_img" accept="image/gif, image/jpeg, image/png" required>
                                </div>
                            </div>
							<div id="buttons">
                                <input class="greenbtn" type="submit" value="Add Now" id="add_news" />
                                <input class="orangebtn" type="reset" value="Clear" id="clear_news" />
                            </div>
                        </form>
					</div>
				</div>
				<div id="Alumni" class="content_panel" style="display:none;">
					<div class="panel-header-blue">
						<h2>Our Alumni</h2>
					</div>
					<div style="padding:20px;overflow:hidden;display:block;">
						<?php
							include 'php/config.php';
							require_once 'php/variables.php';
							$sql = "SELECT name,prof,company,image FROM `$tbl_alumni` ORDER BY year desc";
							$result = mysqli_query($db,$sql);
							$rowcount = mysqli_num_rows($result);
							if ($rowcount > 0) {
								$count = 1;
								echo "<div class=\"alumn\">";
								while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
									$name = $row['name'];
									$prof=$row['prof'];
									$comp=$row['company'];
									echo "<div class=\"alumni-img\">";
									echo "<img src='".$row['image']."' width='230px' height='230px' />";
									echo "<div class=\"alumni-dets\">".$name."<br>".$prof." @ ".$comp."</div></div>";
									$count++;
									if(($count % 3) == 0)
										echo "</div><div class=\"alumn\">";

								}
								echo "</div>";
							} else {
								echo "<div class=\"alumn\">No results</div>";
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
		<script src="js/admin.js"></script>
	</div>
</body>

</html>
