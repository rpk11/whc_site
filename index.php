<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Willamette Hurling Club, Portland Oregon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/favicon.ico" sizes="32x32" />
</head>

<body>
<?php
    include 'header.php';
?>
    <section id="quotes">
        <div id="quote-fader">
            <p id="q1">"Hurling is a bit like lacrosse mixed with second degree murder" <br><span>David Feherty (Former CBS & NBC broadcaster)</span></p>
            <p id="q2">"Some people say hurling isn't important in the scheme of things.... but for some people, hurling is the scheme of things" <br><span>Ger Loughnane (Former Intercounty Hurling Manager)</span></p>
            <p id="q3">"He's on the 50 [yard line]..... he's on the 40..... he's on the 30.... he's on the ground" <br><span>Mícheál Ó Muircheartaigh (Legendary Irish Commentator)</span></p>
            <p id="q4">"It's an old Irish game, ya know?"<br><span>Ray Sullivan (Current Willamette Hurling Club Goalkeeper)</span></p>
            <p id="q5">"I'm not sure if we are a hurling team with a trivia problem, or a trivia team with a hurling problem?"<br><span>Richie Kelly (Former Willamette Hurling Club Midfielder)</span></p>
            <p id="q6">"Never take your eye off the ball, even when it's in the referee's pocket"<br><span>Christy Ring (Legendary hurler)</span></p>
            <p id="q7">"That's what we were told, you always go for the ball... and if can't see it, you pull where you think it is!"<br><span>Tommy Walsh (Legendary hurler)</span></p>
        </div>

    </section>

    <section id="club-values">
        <div class="container">
            <h1><span>Willamette Hurling Club</span> is based in <span>Portland, Oregon.</span></h1>
            <p>We are an <span>official US GAA affiliated club</span>, participating in the <span>Northwest Division</span>, focusing on the following:</p>
            <p>
                <ul>
                    <li>Promoting and raising awareness of the game of hurling</li>
                    <li>Inclusion of all skill levels, ages, nationalities and genders</li>
                    <li>Regular team practices which teach the basic skills of the games for beginners and build more advanced skills for experienced players</li>
                    <li>Road trips to hurling tournaments all around the north west (and beyond!)</li>
                    <li>Having an equal amount of fun off the field with team events and nights out</li>
                    <li>Volunteering in the local community</li>
                </ul>
            </p>
        </div>
    </section>

    <section>
        <div class="container wider">
            <div id="boxes">
                <div class="box" id="learn-about-hurling">
                    <a href="./what-is-hurling.php"><h3>Learn About Hurling</h3>
                    <img src="./images/box1-img.jpg" alt="image of hurling one">
                    <p>Wondering what this weird-looking sport is? Don't know how it's played? Get the lowdown</p></a>
                </div>
                <div class="box" id="schedule-and-events">
                <a href="./schedule-events.php">
                    <h3>Schedule & Events</h3>
                    <img src="./images/box2-img.jpg" alt="image of hurling two">
                    <p>Check out the team's calendar to take part in, or watch the next match or tournament</p></a>
                </div>
                <div class="box" id="join-the-club">
                    <a href="./contact.php"><h3>Join the club</h3>
                    <img src="./images/box3-img.jpg" alt="image of hurling three">
                    <p>Come join us for a practice or just come out and watch if you're not sure yet </p></a>

                </div>
            </div>
        </div>
    </section>

    <section id="sponsors">
        <div class="container">
            <h4>Many thanks to our friends at O'Haras for their continued sponsorship:</h4>
            <a href="http://www.carlowbrewing.com"><img src="images/o-haras.jpg" alt="Sponsor logo, O'Haras"></a>
        </div>
    </section>

    <?php
        include 'footer.php';
    ?>
    <script src="./js/main.js"></script>
    <script src="js/quote-handler.js"></script>
</body>

</html>