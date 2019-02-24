<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>What is hurling? - WHC</title>
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

        <section id="schedule-events">
            <div class="container">
                <h2 class="center">Schedule and Events</h2>
                <p>We have lots of practices, tournaments, scrimmages, volunteering events and trivia nights every season. Have a look at the calendar below on upcoming events.</p>
                <h3>Practices</h3>
                <p>
                    Practices generally happened twice per week (unless there is a tournament):
                </p>
                <ul>
                    <li>Midweek: Irving Park @ 6:30pm on Wednesday</li>
                    <li>Weekend: Westmoreland Park or West Sylvan Middle School on Saturday or Sunday @10am</li>
                </ul>

                <h3>Match Schedule</h3>
                There are generally between 8 and 12 events each season. Below is the currently announced schedule. The rest is TBD.
                <ul>
                    <li>March 16: Portland, Oregon (scimmage)</li>
                    <li>March 30: Tacoma, Washington (tournament)</li>
                    <li>August 23: Leesburg, VA (US GAA National Finals 2019)</li>
                </ul>
                <div class="iframe-container">
                    <iframe id="google-calendar" src="https://calendar.google.com/calendar/embed?src=willamettehurling%40gmail.com&ctz=America%2FLos_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
        </section>

        <?php
            include 'footer.php';
        ?>
        <script src="./js/main.js"></script>
</body>

</html>