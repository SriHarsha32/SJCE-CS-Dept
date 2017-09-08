<?php

    include('config.php');
    require_once "variables.php";

    global $uploadID;

    function uploadImage($wtI,$tbln,$pri,$db){
        if(is_array($_FILES)) {
            if(is_uploaded_file($_FILES['image']['tmp_name'])) {
                $sourcePath = $_FILES['image']['tmp_name'];
                $targetFolder = "../upload_images/$wtI/";
                if (!file_exists($targetFolder)) {
                    mkdir($targetFolder, 0777, true);
                }
                $targetPath = $targetFolder.$_FILES['image']['name'];
                while(file_exists($targetPath)){
                    $targetPath = $targetFolder.uniqid().'-'.$_FILES['image']['name'];
                }
                if(move_uploaded_file($sourcePath,$targetPath)){
                    
                    $sql = "UPDATE `$tbln` SET image='".substr($targetPath,3)."' WHERE $pri=$uploadID;";
                    $result=mysqli_query($db,$sql);
                    return true;
                }
                else return false;
            }
        }
    }

    function send_alerts($db,$type){
        require '../php/PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'sriharsha.s32@gmail.com';                 // SMTP username
        $mail->Password = 'promise-50';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $sql1 = "SELECT * FROM `subscription`";
        $users =  mysqli_query($db,$sql1);
        $sent = true;
        if(mysqli_num_rows($users) > 0){
            while($usr = mysqli_fetch_array($users,MYSQLI_ASSOC)){
                $to= $usr['mail_id'];
                $fname = $usr['fname'];
                $subject="Alerts from CS SJCE";
                $header="from: CS-SJCE ";
                switch($type){
                    case 'news':
                    $message = "Find recent news and information about CS Dept. of SJCE by clicking the following link</br><a href='<cssjce>/events.php'>CS SJCE - News & Events</a>"; break;
                    case 'alert':
                    $message = "Find recent alerts from CS Dept. of SJCE by clicking the following link"; 
                    //$aid = mysql_insert_id();
                    $alerts = mysqli_query($db,"SELECT * FROM `alert` WHERE aid=$uploadID");
                    while($a = mysqli_fetch_row($alerts)){
                        $message.="<a href='<cssjce>/".$a['link']."'>".$a['text']."</a>";
                    }
                    break;
                    case 'event':
                    $message = "Find information about events taking place at CS Dept. of SJCE by clicking the following link</br><a href='<cssjce>/events.php'>CS SJCE - News & Events</a>"; break;
                }
                
                $mail->setFrom('admin@cssjce.ac.in', 'CS SJCE');
                $mail->addAddress($to, $fname);        // Optional name
                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = $subject;
                $mail->Body    = $message;
                $mail->AltBody = $message;

                if(!$mail->send()) {
                    $sent = false;
                } 
                
            }
        }
        if($sent)
            echo "Alerts sent successfully";
    }

	//session_start();
	//if(isset($_SESSION['user']))
		//header("location:Dashboard/");
	 
    $addWhat = $_POST["what"];
    $imgAdd = "";
    $sendalrt = false;
    $alrt ="";
    switch ($addWhat) {
        case 'achievements':
            $title = $_POST["title"];
            $content = $_POST["content"];
            $sqlInsert = "INSERT INTO `$tbl_achievements`(title,content) VALUES('$title','$content')";
            $sucs = "Achievement added successfully.";
            $fail = "Achievement not added.";
            break;
        case 'alert':
            $title = $_POST["text"];
            $content = $_POST["link"];
            $sqlInsert = "INSERT INTO `alert`(text,link) VALUES('$title','$content')";
            $sucs = "Alert added successfully.";
            $fail = "Alert not added.";
            $sendalrt = true;
            $alrt="alert";
            break;
        case 'news':
            $title = $_POST["title"];
            $min_cont = $_POST["min_cont"];
            $content = $_POST["content"];
            $tag1 = isset($_POST["tag1"])?$_POST["tag1"]:"";
            $tag2 = isset($_POST["tag2"])?$_POST["tag2"]:"";
            $tag3 = isset($_POST["tag3"])?$_POST["tag3"]:"";
            $sqlInsert = "INSERT INTO `$tbl_news`(title,min_cont,content,tag1,tag2,tag3) VALUES('$title','$min_cont','$content','$tag1','$tag2','$tag3')";
            $whatImage = "news";
            $table_name = $tbl_news;
            $priID = "nid";
            $sucs = "News added successfully.";
            $fail = "News not added.";
            $sendalrt = true;
            $alrt="news";
            break;
        case 'event':
            $title = $_POST["title"];
            $header = $_POST["header"];
            $content = $_POST["content"];
            $date = $_POST["date"];
            $location = $_POST["location"];
            $sqlInsert = "INSERT INTO `$tbl_events`(title,min_head,content,date,location) VALUES('$title','$header','$content','$date','$location')";
            $whatImage = "events";
            $table_name = $tbl_events;
            $priID = "eid";
            $sucs = "Event added successfully.";
            $fail = "Event not added.";
            $sendalrt = true;
            $alrt="event";
            break;
        case 'faculty':
            $name = $_POST["facname"];
            $desg = $_POST["desgntn"];
            $edu = $_POST["educn"];
            $ints = $_POST["intrsts"];
            $spl = $_POST["spl"];
            $email = $_POST["email"];
            $sqlInsert = "INSERT INTO `$tbl_faculty`(`name`,designation,education,interest,specialization,email) VALUES('$name','$desg','$edu','$ints','$spl','$email')";
            $whatImage = "faculty";
            $table_name = $tbl_faculty;
            $priID = "fid";
            $sucs = "Faculty added successfully.";
            $fail = "Faculty not added.";
            break;
        case 'alumni':
            $name=$_POST['fname'];
            $email=$_POST['mail'];
            $year=$_POST['year'];
            $prof=$_POST['prof'];
            $company=$_POST['company'];
            $location=$_POST['location'];
            $sqlInsert = "INSERT INTO `$tbl_alumni`(name,email,year,prof,company,location) VALUES ('$name', '$email', $year,'$prof','$company','$location')";
            $whatImage = "alumni";
            $table_name = $tbl_alumni;
            $priID = "aid";
            $sucs = "Alumni added successfully.";
            $fail = "Alumni not added.";
            break;
        case 'feedback':
            $name=$_POST['fname'];
            $email=$_POST['mail'];
            $message=$_POST['feedback'];
            $sqlInsert = "INSERT INTO `$tbl_feedback`(ftype,name,email,message) VALUES ('feedback','$name', '$email', '$message')";
            $sucs = "Feedback submitted successfully.";
            $fail = "Feedback couldn't be submitted.";
            break;
        case 'bug':
            $name=$_POST['fname'];
            $email=$_POST['mail'];
            $message=$_POST['content'];
            $sqlInsert = "INSERT INTO `$tbl_feedback`(name,email,message) VALUES ('bug','$name', '$email', '$message')";
            $sucs = "Error sent to developers successfully.";
            $fail = "Error couldn't be sent.";
            break;
        case 'reqst':
            $name=$_POST['fname'];
            $email=$_POST['mail'];
            $message=$_POST['content'];
            $sqlInsert = "INSERT INTO `$tbl_feedback`(name,email,message) VALUES ('request','$name', '$email', '$message')";
            $sucs = "New Feature requested successfully.";
            $fail = "Feature couldn't be requested.";
            break;
        case 'calendar':
            $date = $_POST["date"];
            $event = $_POST["event"];
            $sqlInsert = "INSERT INTO `$tbl_calendar`(`date`,`event`) VALUES('$date','$event')";
            $sucs = "Event added successfully.";
            $fail = "Event not added.";
            break;
        case 'subscribe':
            $name=$_POST['fname'];
            $email=$_POST['mail'];
            $sqlInsert = "INSERT INTO `subscription`(fname,email) VALUES ('$name','$email')";
            $sucs = "Subscription successfull.";
            $fail = "Cannot subscribe now, try again later.";
            break;
        
        default:
            # code...
            break;
    }

    try{
        $result=mysqli_query($db,$sqlInsert);

        $uploadID = mysqli_insert_id($db);
        if($sendalrt)
            send_alerts($db,$alrt);
        if(isset($whatImage)){
            if(uploadImage($whatImage,$table_name,$priID,$db)) $result= true;
            else $result = false;
        }
        else{
            $result=true;
        }
        
    }catch(Exception $e){
        echo "Error Occurred: "+$e->errorMessage()+"\n$fail";
    }

    if($result){
        echo $sucs;
    }
?>