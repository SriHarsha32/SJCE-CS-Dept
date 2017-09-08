<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SriHarsha S">

    <title>SJCE CS | Contact Us</title>

    <!-- Theme CSS -->
    <link href="css/base_styles.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
    <link href="css/snackbar.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="mainPart">
        <header>
            <div class="head-content">
                <img src="images/SJCE_Final.png" />
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
				<li class="nav-item nav-active"><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
        <div id="page_heading">
            <p>Contact Us</p>
        </div>
        <!-- Main Content -->
        <div class="container">
            <div id="snackbar">This is my snackbar</div>
            <div class="sidenav">
                <div class="panel-header-silver">
                    <h2>Information</h2>
                </div>
                <div style="color:#000;padding:20px;font-size:14px;">
                    <div><b>Office Address</b><br> Golden Jubliee Bhavan,Sri Jayachamarajendra College of Engineering, JSS TI Campus, Manasagangotri, Mysore -570006
                    </div>
                    <hr>
                    <div><b>Phone</b><br> 0821- 2548285, 2548286, 2548289
                    </div>
                    <hr>
                    <div><b>Email</b><br>
                        <a href="mailto:admn@sjce.ac.in">admn@sjce.ac.in</a>
                    </div>
                </div>
            </div>
            <div class="center_content">
                <div class="content_panel">
                    <div class="panel-header-blue">
                        <h2>Write to us</h2>
                    </div>
                    <div style="padding:20px;overflow:hidden;display:block;">
                        <form class="form-main" action="php/additem.php">
                            <input type="hidden" name="what" value="feedback" />
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Full Name:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="fname" id="fd_name" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Email Address:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="email" name="mail" id="fd_email" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Feedback:</big></label>
                                </div>
                                <div class="form-right">
                                    <textarea class="txtbox" rows="4" cols="50" name="feedback"></textarea>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="greenbtn" type="submit" value="Submit" id="add" />
                                <input class="orangebtn" type="reset" value="Clear" id="clear" />
                            </div>
                        </form>
                    </div>
                </div>
                <div id="mapholder" class="content_panel">
                    <div class="panel-header-blue">
                        <h2>Find us here</h2>
                    </div>
                    <div id="myMap" style="height:300px;">
                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDqnsrNyWi579OtUZrWIoOVjSysSPfoR9c'></script>

                        <!--<script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=68bfaaf98509fb66da80e271636e4fa100f14b81'></script>-->
                        <script type='text/javascript'>
                            function init_map() {
                                var myOptions = {
                                    zoom: 15,
                                    center: new google.maps.LatLng(12.314487412907603, 76.61355524603277),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };
                                map = new google.maps.Map(document.getElementById('myMap'), myOptions);
                                marker = new google.maps.Marker({
                                    map: map,
                                    position: new google.maps.LatLng(12.314487412907603, 76.61355524603277)
                                });
                                infowindow = new google.maps.InfoWindow({
                                    content: '<strong>Department of Computer Science and Engineering</strong><br>Sri Jayachamarajendra College of Engineering<br>570006 Mysore<br>'
                                });
                                google.maps.event.addListener(marker, 'click', function() {
                                    infowindow.open(map, marker);
                                });
                                infowindow.open(map, marker);
                            }
                            google.maps.event.addDomListener(window, 'load', init_map);
                        </script>
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
                            <hr> Phone: 0821- 2548285, 2548286, 2548289
                            <hr> Email: <a href="mailto:admn@sjce.ac.in">admn@sjce.ac.in</a>
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
        <script src="js/admin.js"></script>
    </div>
</body>

</html>