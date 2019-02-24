<?php


ini_set('display_errors', '1');
echo "Hello world" ;

    if(isset($_POST['submit']))
    {
        $to = 'webmaster@richiekelly.net, rpk11@richiekelly.net';
        $bcc = "rpk11@richiekelly.net";
        $name = $_POST['name'];
        $headers = "From: " . $_POST['email']."\r\n";   
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if($subject == "join"){
            $subject = "WHC - New player";
        }else if($subject == "sponsor"){
            $subject = "WHC - Sponsorship";
        }else if($subject=="suggest"){
            $subject = "WHC - Event suggestion";
        }else {
            $subject = "WHC -General Inquiry";
        }
        
        $txt = "You have a message from: ".$name."\n\n Message: ".$message.".\n";
        mail($to, $subject, $txt, $headers);


    }

    
?>