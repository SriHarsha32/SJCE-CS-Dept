<?php
    include('../php/config.php');
    require_once "../php/variables.php";
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
    if(mysqli_num_rows($users) > 0){
        while($usr = mysqli_fetch_array($users,MYSQLI_ASSOC)){
            $to= $usr['mail_id'];
            $fname = $usr['fname'];
            $subject="Alerts from CS SJCE";
            $header="from: CS-SJCE ";
            $type = "alert";
            switch($type){
                case 'news':
                $message = "Find recent news and information about CS Dept. of SJCE by clicking the following link"; break;
                case 'alert':
                $message = "Find recent alerts from CS Dept. of SJCE by clicking the following link"; break;
                case 'event':
                $message = "Find information about events taking place at CS Dept. of SJCE by clicking the following link"; break;
            }
            $alerts = mysqli_query($db,"SELECT * FROM `alert` WHERE aid=(SELECT LAST_INSERT_ID())");
            while($a = mysqli_fetch_row($alerts)){
                echo "Text :".$a['text'];
                echo "\nLink :".$a['link'];
                $message.="<a href='".$a['link']."'>".$a['text']."</a>";
            }

                    
            $mail->setFrom('admin@cssjce.ac.in', 'CS SJCE');
            $mail->addAddress($to, $fname);        // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            if(!$mail->send()) {
                echo "Alerts couldn't be sent.";
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Alerts sent successfully';
            }

            //$message.="https://www.lccsjce.org/fossbytes16/brainiac/confirm.php?passkey=$conf_code";
            /*$sentmail = mail($to,$subject,$message,$header);
            if($sentmail)
                echo "\nAlerts sent successfully";
            else
                echo "\nAlerts couldn't be sent";*/
        }
    }
?>
<html>
    <body>
    </body>
</html>