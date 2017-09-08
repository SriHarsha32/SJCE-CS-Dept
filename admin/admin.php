<?php
    session_start();
    if(!isset($_SESSION['user'])){
		header("location:index.php");
	}
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
                <li class="nav-item"><a href="../index.php">Home</a></li>
				<li class="nav-item"><a href="../faculty.php">Faculty</a></li>
				<li class="nav-item"><a href="../courses.php">Courses</a></li>
				<li class="nav-item"><a href="../timetable.php">Timetable</a></li>
				<li class="nav-item"><a href="../events.php">Events</a></li>
				<li class="nav-item"><a href="../facilities.php">Facilities</a></li>
				<li class="nav-item"><a href="../achievements.php">Achievements</a></li>
				<li class="nav-item"><a href="../alumni.php">Alumni</a></li>
				<li class="nav-item"><a href="../contact.php">Contact Us</a></li>
            </ul>
        </nav>
        <div id="page_heading">
            <p>Admin</p>
            
        </div>
        <div id="bread_crumbs">
            <p>Admin > Settings</p>
        </div>
        <!-- Main Content -->
        <div class="container">
            <div id="snackbar">This is my snackbar</div>
            <div class="sidenav">
                <div class="panel-header-silver">
                    <h2>ADD ITEM</h2>
                </div>
                <div class="sidenav-item sidenav-active" data-tab="Settings">
                    Settings
                </div>
                <div class="sidenav-item" data-tab="Achievements">
                    Achievements
                </div>
                <div class="sidenav-item" data-tab="News">
                    News
                </div>
                <div class="sidenav-item" data-tab="Events">
                    Events
                </div>
                <div class="sidenav-item" data-tab="Faculty">
                    Faculty
                </div>
                <div class="sidenav-item" data-tab="Calendar">
                    Calendar
                </div>
                <div class="sidenav-item" data-tab="Alerts">
                    Alerts
                </div>
                <div class="sidenav-item" data-tab="Timetable">
                    Timetable
                </div>
            </div>
            <div class="center_content">
                <div id="Settings" class="content_panel">
                    <div class="panel-header-blue">
                        <h2>Settings</h2>
                    </div>
                    <div style="padding:20px;overflow:hidden;display:block;">
                        <div style="float:right;margin-right:20px;">
                            <button style="width:100%;" class="orangebtn" onclick="logout()">Logout</a>
                        </div>
                        </br>
                        </br>
                        <hr>
                        <form class="form-main" action="change.php">
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Login ID:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="lgnID" id="lgn" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Old Password:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="password" name="oldpass" id="pwd" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>New Password:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="password" name="newpass" id="pwd2" size="20" required>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="greenbtn" type="submit" value="Change Password" id="add" />
                                <input class="orangebtn" type="reset" value="Clear" id="clear" />
                            </div>
                        </form>
                    </div>
                </div>
                <div id="Alerts" class="content_panel" style="display:none;">
                    <div class="panel-header-blue">
                        <h2>Add Alerts</h2>
                    </div>
                    <div style="padding:20px;overflow:hidden;display:block;">
                        <form class="form-main" action="../php/additem.php">
                            <input type="hidden" name="what" value="alert" />
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Text:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="text" id="al_txt" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Link:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="link" id="al_lnk" size="20" required>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="greenbtn" type="submit" value="Add Now" id="add" />
                                <input class="orangebtn" type="reset" value="Clear" id="clear" />
                            </div>
                        </form>
                    </div>
                </div>
                <div id="Achievements" class="content_panel" style="display:none;">
                    <div class="panel-header-blue">
                        <h2>Add Achievements</h2>
                    </div>
                    <div style="padding:20px;overflow:hidden;display:block;">
                        <form class="form-main" action="../php/additem.php">
                            <input type="hidden" name="what" value="achievements" />
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Title:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="title" id="ach_title" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Content:</big></label>
                                </div>
                                <div class="form-right">
                                    <textarea class="txtbox" rows="4" cols="50" name="content" id="ach_content" style="resize:none;" required></textarea>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="greenbtn" type="submit" value="Add Now" id="add_ach" />
                                <input class="orangebtn" type="reset" value="Clear" id="clear_ach" />
                            </div>
                        </form>
                    </div>
                </div>
                <div id="News" class="content_panel" style="display:none;">
                    <div class="panel-header-blue">
                        <h2>Add News</h2>
                    </div>
                    <div style="padding:20px;overflow:hidden;display:block;">
                        <form class="form-main" action="../php/additem.php">
                            <input type="hidden" name="what" value="news" />
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Title:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="title" id="news_title" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Header:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="min_cont" id="news_hdr" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Content:</big></label>
                                </div>
                                <div class="form-right">
                                    <textarea class="txtbox" rows="4" name="content" cols="50" id="news_content" style="resize:none;" required></textarea>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Tag 1:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="tag1" id="news_tag1" size="20">
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Tag 2:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="tag2" id="news_tag2" size="20">
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Tag 3:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="tag3" id="news_tag3" size="20">
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Image:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="file" name="image" id="news_img" accept="image/gif, image/jpeg, image/png" required>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="greenbtn" type="submit" value="Add Now" id="add_news" />
                                <input class="orangebtn" type="reset" value="Clear" id="clear_news" />
                            </div>
                        </form>
                    </div>
                </div>
                <div id="Events" class="content_panel" style="display:none;">
                    <div class="panel-header-blue">
                        <h2>Add Event</h2>
                    </div>
                    <div style="padding:20px;overflow:hidden;display:block;">
                        <form class="form-main" action="../php/additem.php">
                            <input type="hidden" name="what" value="event" />
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Title:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="title" id="evnt_title" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Header:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="header" id="evnt_hdr" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Content:</big></label>
                                </div>
                                <div class="form-right">
                                    <textarea class="txtbox" rows="4" name="content" cols="50" id="evnt_content" style="resize:none;" required></textarea>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Date:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="date" name="date" id="evnt_date" size="20" required placeholder="dd-mm-yyyy">
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Location:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="location" id="evnt_locn" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Image:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="file" name="image" id="evnt_img" accept="image/gif, image/jpeg, image/png" required>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="greenbtn" type="submit" value="Add Now" id="add_evnt" />
                                <input class="orangebtn" type="reset" value="Clear" id="clear_evnt" />
                            </div>
                        </form>
                    </div>
                </div>
                <div id="Faculty" class="content_panel" style="display:none;">
                    <div class="panel-header-blue">
                        <h2>Add Faculty</h2>
                    </div>
                    <div style="padding:20px;overflow:hidden;display:block;">
                        <form class="form-main" action="../php/additem.php">
                            <input type="hidden" name="what" value="faculty" />
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Name:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="facname" id="fac_name" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Designation:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="desgntn" id="fac_dsgn" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Education:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="educn" id="fac_edu" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Interests:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="intrsts" id="fac_ints" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Specialization:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="spl" id="fac_spl" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Email:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="email" name="email" id="fac_spl" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Image:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="file" name="image" id="fac_img" accept="image/gif, image/jpeg, image/png" required>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="greenbtn" type="submit" value="Add Now" id="add_fac" />
                                <input class="orangebtn" type="reset" value="Clear" id="clear_fac" />
                            </div>
                        </form>
                    </div>
                </div>
                <div id="Calendar" class="content_panel" style="display:none;">
                    <div class="panel-header-blue">
                        <h2>Add Calendar of Events</h2>
                    </div>
                    <div style="padding:20px;overflow:hidden;display:block;">
                        <form class="form-main" action="../php/additem.php">
                            <input type="hidden" name="what" value="calendar" />
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Date:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="date" name="date" id="coe_date" size="20" required placeholder="dd-mm-yyyy">
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Event:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" name="event" id="coe_evt" size="20" required>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="greenbtn" type="submit" value="Add Now" id="add_coe" />
                                <input class="orangebtn" type="reset" value="Clear" id="clear_coe" />
                            </div>
                        </form>
                    </div>
                </div>
                <div id="Timetable" class="content_panel" style="display:none;">
                    <div class="panel-header-blue">
                        <h2>Add Timetable</h2>
                    </div>
                    <div style="padding:20px;overflow:hidden;display:block;">
                        <center>Add Section</center>
                        <br>
                        <form>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Year:</big></label>
                                </div>
                                <div class="form-right">
                                    <select class="form-select" required id="tt_yr">
										<option>First Year BE</option>
										<option>Second Year BE</option>
										<option>Third Year BE</option>
										<option>Fourth Year BE</option>
										<option>First Year M.Tech</option>
										<option>Second Year M.Tech</option>
										<option>First Year MCA</option>
										<option>Second Year MCA</option>
										<option>Third Year MCA</option>
									</select>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Section:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" id="tt_sec" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Room No:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" id="tt_rno" size="20" required>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="greenbtn" type="submit" value="Add Now" id="add_sec" />
                                <input class="orangebtn" type="reset" value="Clear" id="clear_sec" />
                            </div>
                        </form>
                        <hr />
                        <br>
                        <center>Add Course</center>
                        <br>
                        <form>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Section:</big></label>
                                </div>
                                <div class="form-right">
                                    <select class="form-select" id="cr_yr" required>
										<option>First Year BE 'A'</option>
										<option>First Year BE 'B'</option>
										<!-- others section dynamically -->
									</select>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Course ID:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" id="tt_crs" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Course Name:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" id="tt_rno" size="20" required>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Faculty Name:</big></label>
                                </div>
                                <div class="form-right">
                                    <input class="txtbox" type="text" id="tt_fac" size="20" required>
                                </div>
                            </div>
                            <div id="buttons">
                                <input class="greenbtn" type="submit" value="Add Now" id="add_crs" />
                                <input class="orangebtn" type="reset" value="Clear" id="clear_crs" />
                            </div>
                        </form>
                        <br>
                        <hr />
                        <br>
                        <center>Add Class</center>
                        <br>
                        <form>
                            <div class="form-item">
                                <div class="form-left">
                                    <label><big>Section:</big></label>
                                </div>
                                <div class="form-right">
                                    <select class="form-select" id="cls_yr" required>
										<option>First Year BE 'A'</option>
										<option>First Year BE 'B'</option>
										<!-- others section dynamically -->
									</select>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-item">
                                <table id="timetable">
                                    <tr>
                                        <td align="center">
                                            <td>7:30-8:30</td>
                                            <td>8:30-9:30</td>
                                            <td>9:30-10:30</td>
                                            <td>10:30-11:00</td>
                                            <td>11:30-11:50</td>
                                            <td>11:50-12:40</td>
                                            <td>12:40-1:30</td>
                                            <td>1:30-2:30</td>
                                            <td>2:30-3:30</td>
                                            <td>3:30-4:30</td>
                                            <td>4:30-5:30</td>
                                    </tr>
                                    <tr>
                                        <td align="center">MONDAY</td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td rowspan="7">TEA BREAK</td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td rowspan="7">LUNCH BREAK</td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                    </tr>
                                    <tr>
                                        <td align="center">TUESDAY</td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                    </tr>
                                    <tr>
                                        <td align="center">WEDNESDAY</td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                    </tr>
                                    <tr>
                                        <td align="center">THURSDAY</td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                    </tr>
                                    <tr>
                                        <td align="center">FRIDAY</td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                    </tr>
                                    <tr>
                                        <td align="center">SATURDAY</td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                        <td class="tt-spl"><select class="form-select-cr">
											<option>CSXXX</option>
											<option>CSXXX</option>
											<!-- others section dynamically -->
										</select></td>
                                    </tr>
                                </table>
                            </div>
                            <div id="buttons">
                                <input class="greenbtn" type="submit" value="Add Now" id="add_crs" />
                                <input class="orangebtn" type="reset" value="Clear" id="clear_crs" />
                            </div>
                        </form>
                        <br>
                        <hr />
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
                                <a href="https://www.facebook.com/SJCE.Mysore.India" target="_blank"><img src="../images/social/facebook.png" width="50px" height="50px" alt="facebook" title="SJCE Mysuru"></a>
                            </div>
                            <div class="sc-icn2">
                                <a href="https://www.twitter.com/@jcedboard" target="_blank"><img src="../images/social/twitter.png" width="50px" height="50px" alt="twitter" title="@JCEdBoard"></a>
                            </div>
                            <div class="sc-icn2">
                                <a href="https://www.instagram.com/sjce_photography/" target="_blank"><img src="../images/social/instagram2.png" width="50px" height="50px" alt="instagram" title="SJCE Photography"></a>
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
        <script src="../js/jquery.min.js"></script>
        <script src="../js/sidenav.js"></script>
        <script src="../js/admin.js"></script>
    </div>
</body>

</html>