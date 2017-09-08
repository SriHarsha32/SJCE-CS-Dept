<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SriHarsha S">

    <title>SJCE CS | Gallery</title>

    <!-- Bootstrap Core CSS 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Theme CSS -->
    <link href="css/base_styles.css" rel="stylesheet">
	<style type="text/css">
        #gallery {
            display: block;
            background-color: #fff;
            float: left;
            margin: 0 auto;
        }

        .gall-img {
            width: 229px;
            height: 229px;
            display: block;
            margin-right: 10px;
            margin-bottom: 10px;
            float: left;
            padding: 5px;
            border: 1px solid #ccc;
        }

        .gall-img img{
            width: 219px;
            height: 219px;
            padding: 5px;
        }

        .gall-img:last-child{
            margin-right: 0px !important;
        }

		.greenbtn {
			font-size: 1.5em;
			background-color: #4CAF50;
			font-weight: 400;
			text-transform: uppercase;
			padding: 7px;
			color: #fff;
			width: 40%;
			float: center;
			border-radius: 0px;
			border: 2px solid #4CAF50;
		}
    </style>
	
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div id="mainPart">
		<!-- Header part to be added later -->
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
				<li class="nav-item"><a href="alumni.php">Alumni</a></li>
				<li class="nav-item"><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>
		<div id="page_heading">
			<p>Gallery</p>
		</div>
		<!-- Main Content -->
		<div class="container">
			<div class="center_content" style="width:100%;">
				<div class="content_panel">
					<div class="panel-header-blue">
						<h2>Image Collection</h2>
					</div>
					<div style="padding:20px;display:block;overflow:hidden;">
						<div id="gallery">
                            <div class="gall-img"><img src="images/gallery/img0.jpg"></div>
                            <div class="gall-img"><img src="images/gallery/img2.jpg"></div>
                            <div class="gall-img"><img src="images/gallery/img10.jpg"></div>
							<div class="gall-img"><img src="images/gallery/img11.jpg"></div>
                        </div>
                        <div id="gallery">
                            <div class="gall-img"><img src="images/gallery/img12.jpg"></div>
                            <div class="gall-img"><img src="images/gallery/img13.jpg"></div>
                            <div class="gall-img"><img src="images/gallery/img14.jpg"></div>
							<div class="gall-img"><img src="images/gallery/img15.jpg"></div>
                        </div>
                        <div id="gallery">
                            <div class="gall-img"><img src="images/gallery/img16.jpg"></div>
                            <div class="gall-img"><img src="images/gallery/img17.jpg"></div>
                            <div class="gall-img"><img src="images/gallery/img18.jpg"></div>
							<div class="gall-img"><img src="images/gallery/img19.jpg"></div>
                        </div>
						<div style="float:right;margin-right:20px;">
							<button style="width:100%;" class="greenbtn" onclick="view360()">View 360&deg; Image</a>
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
		<script type="text/javascript">
		function view360() {
			window.location.href = "360gallery.html";
		}
</script>
	</div>
</body>

</html>
