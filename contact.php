<!DOCTYPE html>

<?php
    if(isset($_POST['submit']))
    {
        $to = 'willamettehurling@richiekelly.net';
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
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us - WHC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style-others.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/favicon.ico" sizes="32x32" />
</head>

<body>
    <?php
        include 'header.php';
    ?>
    <section id="contact">
        <div class="container">

        <?php
       
        if(!isset($_POST['submit']))
        {
        ?>
            <form class="form-style" action="contact.php" method="POST">
                <h2 class="center">Contact Us</h2>
                <p>We're always looking to hear from new people! So whether you are totally new to hurling, a seasoned hurling veteran or just want some information about our club, please send us a message below and we'll get back to you ASAP with as much
                    detail as we can.</p>
                <label>Name:</label>
                <input type="text" name="name">
                <label>Email:</label>
                <input type="text" name="email">
                <label>Subject:</label>
                <select name="subject">
                    <option value="join">Join the team</option>
                    <option value="sponsor">Become a sponsor</option>
                    <option value="general">Suggest an event</option>
                    <option value="general">General information</option>
                </select>
                <label>Message: </label>
                <textarea id="message"></textarea>
                <button class="button" type="submit" value="Submit" name="submit">Submit</button>
            </form>
        <?php

        }else{
        ?>
        <h2 class="center">Thank you for getting in contact</h2>
        <p class="center">We have received your message and will get back to you as quickly as we possibly can!</p>
        <?php
        }
        ?>
    </section>
    <?php
        include 'footer.php';
    ?>
    <script src="./js/main.js"></script>
</body>

</html>