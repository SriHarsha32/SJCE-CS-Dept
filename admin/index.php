<?php
    if(isset($_SESSION['user']))
        header("admin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SriHarsha S">

    <title>SJCE CS | Admin</title>

    <!-- Theme CSS -->
    <link href="../css/base_styles.css" rel="stylesheet">
    <link href="../css/admin.css" rel="stylesheet">
    <link href="../css/form.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <style>
        #timetable th,
        #timetable td {
            font-size: 10px !important;
        }
        
        .tt-spl {
            margin: 0px;
            padding: 2px;
        }
    </style>
</head>

<body>
    <div id="mainPart">
        <header>
            <div class="head-content">
                <img src="../images/SJCE_Final.png" />
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
            <p>Admin</p>
        </div>
        <div id="bread_crumbs">
            <p>Admin > Login</p>
        </div>
        <!-- Main Content -->
        <div class="container">
            <div id="snackbar">This is my snackbar</div>
            <div class="center_content">
                <div id="Login" class="content_panel">
                    <div class="panel-header-blue">
                        <h2>Login</h2>
                    </div>
                    <div style="padding:20px;">
                        <form class="form-main" action="login.php">
                            <input type="hidden" name="what" value="alert" />
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Login ID:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="lgnID" id="id" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Password:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="password" name="password" id="pwd" size="20" required>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="greenbtn" type="submit" value="Login" id="add" />
                                <input class="orangebtn" type="reset" value="Clear" id="clear" />
                            </div>
                        </form>
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
                    </div>
                    <div class="quarter-width">
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
        <script src="../js/jquery.min.js"></script>
        <script>
        function showSnackBar(alertText) {
            var x = document.getElementById("snackbar")
            x.innerHTML = alertText;
            x.className = "show";
            setTimeout(function() { x.className = x.className.replace("show", ""); }, 3000);
        }

        $(".form-main").submit(function(event) {
            event.preventDefault();
            var $form = $(this),
                url = $form.attr('action');
            var form_data = new FormData(this);
            $.ajax({
                url: url,
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(data) {
                    //showSnackBar(data);
                    $form[0].reset();
                    if(data=="Success")
                        window.location.href = "admin.php";
                    else
                        showSnackBar(data);
                }
            });
        });
        </script>
    </div>
</body>

</html>