<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SriHarsha S">

    <title>SJCE CS</title>
    <!-- Theme CSS -->
    <link href="css/base_styles.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/events.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">
    <link href="css/snackbar.css" rel="stylesheet">

    <style type="text/css">

    #marqueecontainer{
        position: relative;
        width: 100%; /*marquee width */
        height: 200px; /*marquee height */
        background-color: white;
        overflow: hidden;
        padding: 2px;
        padding-left: 4px;
    }

    </style>


    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="mainPart">
        <!-- Header part to be added later -->
        <header>
            <div class="head-content">
                <img src="images/SJCE_Final.png" />
                <h4>JSS Mahavidyapeetha</h4>
                <h2 style="color:#fff;">Sri Jayachamarajendra College of Engineering</h1>
                    <h3>A Commitment to Technical Education</h3>
                    <hr style="width:40%;">
                    <h1>Department of Computer Science and Engineering</h2>
            </div>
        </header>
        <!-- Navigation -->
        <nav class="x-nav">
            <ul class="nav-custom">
                <li class="nav-item nav-active"><a href="index.php">Home</a></li>
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
        <!-- Image Slider -->
        <div id="imgsl_prnt">
            <div id="imgslider">
                <div id="slider" data="img0">
                    <div class="slider_img">
                        <img id="sldimg" src="images/main/img0.png">
                    </div>
                    <div id="btnhold">
                        <div id="imgchanger">
                            <span id="img-prev"></span>
                            <span id="img-next"></span>
                        </div>
                    </div>
                </div>
                <div class="slider_cap">
                    <p id="slider_cap_hd">This is head for slider</p>
                    <p id="slider_cap_dt">This is head for slider.This is head for slider.This is head for slider.This is head for slider.This is head for slider.This is head for slider.This is head for slider.</p>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div class="container">
            <div id="snackbar">This is my snackbar</div>
            <div class="center_content">
                <div class="content_panel">
                    <div class="panel-header-blue">
                        <h2>Welcome</h2>
                    </div>
                    <div style="padding:20px;">
                        <p style="text-indent: 70px;">Welcome to the department of Computer Science and Engineering. The department was established in the year 1982 with the objective of imparting quality education in the field of Computer Science. The department has modern facilities
                            for teaching, learning and research. The department offers a wide array of research opportunities and programs of study at undergraduate and postgraduate level. With rapidly evolving technology and the continuous need for innovation,
                            the department has produced quality professionals holding important positions in the IT industry in India and abroad.
                        </p>
                    </div>
                </div>
                <div class="two_panel">
                    <div class="center2_content">
                        <div class="content_panel">
                            <div class="panel-header-blue">
                                <h2>News</h2>
                            </div>
                            <div style="padding:5px 20px 20px 20px;">
                                <?php
                                    include('php/config.php');
                                    require_once "php/variables.php";
                                    $result = mysqli_query($db, "SELECT * FROM $tbl_news ORDER BY date_added desc LIMIT 4;");
                                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                                    {
                                        echo "<div class=\"news-panel\"><div class=\"news-img\">";
                                        echo "<img src=\"".$row['image']."\" width='65px' height='65px'/></div><div>";
                                        echo "<a class=\"news-head\">".$row['title']."</a>";
                                        echo "<p class=\"news-data\">".$row['min_cont']."</p>";
                                        echo "</div></div>";
                                    }
                                    //mysqli_close($db);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="center2_content">
                        <div class="content_panel">
                            <div class="panel-header-blue">
                                <h2>Events</h2>
                            </div>
                            <div style="padding:5px 20px 20px 20px;">
                                <?php
                                    //include('php/config.php');
                                    //require_once "php/variables.php";
                                    $result = mysqli_query($db, "SELECT * FROM $tbl_events ORDER BY date desc LIMIT 4;");
                                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                                    {
                                        $yrdata= strtotime($row['date']);
                                        $month = date('M', $yrdata);
                                        $dt = date('d',$yrdata);
                                        echo "<div class=\"events-panel\">
                                                <div class=\"event-cal\">
                                                    <span class=\"event-month\">$month</span>
                                                    <span class=\"event-date\">$dt</span>
                                                </div>
                                                <div>
                                                    <a class=\"event-head\">".$row['title']."</a>
                                                    <p class=\"event-data\">".$row['min_head']."</p>
                                                </div>
                                            </div>";
                                    }
                                    //mysqli_close($db);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="right_content">
                <div class="content_panel">
                    <div class="panel-header-blue">
                        <h2>Messages</h2>
                    </div>
                    <div style="padding:5px 20px 20px 20px;" id="msgP" data="msg0">
                        <div class="msg-panel" id="msg0" style="display:block;">
                            <p class="msg-data"><b>Message 1 by director</b></p>
                            <p class="msg-data">Our journey is towards excellence. We invite you to be a part of this excellence</p>
                        </div>
                        <div class="msg-panel" id="msg1" style="display:none;">
                            <p class="msg-data"><b>Message 2 by director</b></p>
                            <p class="msg-data">Our journey is towards excellence. We invite you to be a part of this excellence</p>
                        </div>
                        <div class="msg-panel" id="msg2" style="display:none;">
                            <p class="msg-data"><b>Message 3 by director</b></p>
                            <p class="msg-data">Our journey is towards excellence. We invite you to be a part of this excellence</p>
                        </div>
                        <div class="msg-btns">
                            <div style="width:10%;float:left;"><span id="msg-btn-left"></span></div>
                            <div style="width:80%;float:left;">
                                <p id="msg-by"><b>Prof. C Ranganathaiah</b></p>
                            </div>
                            <div style="width:10%;float:left;"><span id="msg-btn-right"></span></div>
                        </div>

                    </div>
                </div>
                <div class="content_panel">
                    <div class="panel-header-blue">
                        <h2>ALERTS</h2>
                    </div>
                    <div style="padding:20px;top-padding:0px;overflow:hidden;display:block;">
                        <div id="alertPanel" style="min-height:250px;">
                            <div id="marqueecontainer" class="container-marq" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
                                <div id="vmarquee" style="position: absolute; width: 98%;">
                                    <?php
                                        $result = mysqli_query($db, "SELECT * FROM `alert` ORDER BY added desc;");
                                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                                        {
                                            echo "<div class=\"alertanch\"><a href='".$row['link']."'>".$row['text']."</a></div>";
                                        }
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <button id="sub" class="loginbtn" style="padding:7px;">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
                <div class="content_panel">
                    <div class="panel-header-blue">
                        <h2>SOCIAL</h2>
                    </div>
                    <div style="padding:20px;overflow:hidden;display:block;">
                        <div id="social">
                            <div class="sc-icn">
                                <a href="https://www.facebook.com/SJCE.Mysore.India" target="_blank"><img src="images/social/facebook.png" width="65px" height="65px" alt="facebook" title="SJCE Mysuru"></a>
                            </div>
                            <div class="sc-icn">
                                <a href="https://www.twitter.com/@jcedboard" target="_blank"><img src="images/social/twitter.png" width="65px" height="65px" alt="twitter" title="@JCEdBoard"></a>
                            </div>
                            <div class="sc-icn">
                                <a href="https://www.instagram.com/sjce_photography/" target="_blank"><img src="images/social/instagram2.png" width="65px" height="65px" alt="instagram" title="SJCE Photography"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content_panel">
                    <div class="panel-header-blue">
                        <h2>Gallery</h2>
                    </div>
                    <div style="padding:5px 20px 20px 20px;overflow:hidden;display:block;">
                        <div id="gallery">
                            <div class="gall-img"><a href="gallery.php"><img width='65px' height='65px' src="images/gallery/img0.jpg"></a></div>
                            <div class="gall-img"><a href="gallery.php"><img width='65px' height='65px' src="images/gallery/img12.jpg"></a></div>
                            <div class="gall-img"><a href="gallery.php"><img width='65px' height='65px' src="images/gallery/img18.jpg"></a></div>
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
                        <a style="cursor:pointer;" onclick="feedClick('bug')">Found a Bug</a><br>
                        <a style="cursor:pointer;" onclick="feedClick('feed')">Feedback</a><br>
                        <a style="cursor:pointer;" onclick="feedClick('feature')">Request feature</a><br>
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

      <div id="feedback" class="modal">  
		<div class="modal-content animate">
			<div class="row" style="background-color:#5fa8d3;">
				<div style="background-color:#f1f1f1;">
					<div class="containerx">
						<ul class="tabs" style="list-style-type:none;">
							<li class="tab-custom-item tabhead-active" data-tab="bug">Report Bug</li>
							<li class="tab-custom-item" data-tab="feed">Feedback</li>
                            <li class="tab-custom-item" data-tab="feature">Request Feature</li>
						</ul>
                        <span class="close" title="Close">&times;</span>
                    </div>
                    </br>
                    <hr>
                    <div id="bug" class="containerx tab-content  tab-active">
                        <form class="form-main" action="php/additem.php">
                            <input type="hidden" name="what" value="bug" />
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Full Name:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="fname" id="al_txt" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Email ID:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="email" name="mail" id="al_lnk" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Details:</big></label>
                                </div>
                                <div class="form-right">
                                    <textarea class="txtbox" rows="4" cols="50" name="content" id="ach_content" style="resize:none;" required></textarea>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="loginbtn" type="submit" value="Report" id="add" />
                            </div>
                        </form>
					</div>
					<div id="feed" class="containerx tab-content">
                        <form class="form-main" action="php/additem.php">
                            <input type="hidden" name="what" value="feedback" />
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Full Name:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="fname" id="al_txt" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Email ID:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="email" name="mail" id="al_lnk" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Message:</big></label>
                                </div>
                                <div class="form-right">
                                    <textarea class="txtbox" rows="4" cols="50" name="feedback" id="ach_content" style="resize:none;" required></textarea>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="loginbtn" type="submit" value="Submit" id="add" />
                            </div>
                        </form>
					</div>
					<div id="feature" class="containerx tab-content">
                        <form class="form-main" action="php/additem.php">
                            <input type="hidden" name="what" value="reqst" />
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Full Name:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="fname" id="al_txt" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Email ID:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="email" name="mail" id="al_lnk" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Feature:</big></label>
                                </div>
                                <div class="form-right">
                                    <textarea class="txtbox" rows="4" cols="50" name="content" id="ach_content" style="resize:none;" required></textarea>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="loginbtn" type="submit" value="Request" id="add" />
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
      </div>

        <div id="subscribe" class="modal">  
		    <div class="modal-content animate">
			<div class="row" style="background-color:#5fa8d3;">
				<div style="background-color:#f1f1f1;">
                    <div id="bug" class="containerx">
                        <p class="tabs">Please subscribe yourselves to receieve email about events and other alerts</p>
                        <span class="close" title="Close">&times;</span>
                        </br></br></br>
                        <hr>
                        <form class="form-main" action="php/additem.php">
                            <input type="hidden" name="what" value="subscribe" />
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Full Name:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="fname" id="al_txt" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Email ID:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="email" name="mail" id="al_lnk" size="20" required>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="loginbtn" type="submit" value="Subscribe" id="add" />
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>

        <script src="js/jquery.min.js"></script>
        <script src="js/index.js"></script>
        <script src="js/footer.js"></script>
                    
        <script type="text/javascript">

            var delayb4scroll=500 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
            var marqueespeed=1 //Specify marquee scroll speed (larger is faster 1-10)
            var pauseit=1 //Pause marquee onMousever (0=no. 1=yes)?

            ////NO NEED TO EDIT BELOW THIS LINE////////////

            var copyspeed=marqueespeed
            var pausespeed=(pauseit==0)? copyspeed: 0
            var actualheight=''

            function scrollmarquee(){
            if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8)) //if scroller hasn't reached the end of its height
            cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px" //move scroller upwards
            else //else, reset to original position
            cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
            }

            function initializemarquee(){
            cross_marquee=document.getElementById("vmarquee")
            cross_marquee.style.top=0
            marqueeheight=document.getElementById("marqueecontainer").offsetHeight
            actualheight=cross_marquee.offsetHeight //height of marquee content (much of which is hidden from view)
            if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
            cross_marquee.style.height=marqueeheight+"px"
            cross_marquee.style.overflow="scroll"
            return
            }
            setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
            }

            if (window.addEventListener)
            window.addEventListener("load", initializemarquee, false)
            else if (window.attachEvent)
            window.attachEvent("onload", initializemarquee)
            else if (document.getElementById)
            window.onload=initializemarquee
        </script>
    </div>
</body>

</html>