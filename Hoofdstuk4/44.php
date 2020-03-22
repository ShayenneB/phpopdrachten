<!DOCTYPE HTML>
    <html>
    <head>
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <meta charset="UTF-8">
        <link href="/phpopdrachten/css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
    include "../Includes/header.php";
    ?>
    <?php
    date_default_timezone_set('Europe/Amsterdam');

    $dayCounter = date('w');
    $date1 = date('d-m-Y');
    $telDays = date('w');

    echo(strtotime("+$telDays"));

    for ($telDays = -1; $telDays <= 7; $telDays++)
    {
        echo "Dag " . $telDays . " is " . (strtotime("now", date('w')) . " " . $date1 . "<br>");
    }
    ?>
            <a href="/phpopdrachten/index.php">Terug</a>
    <?php
    include "../Includes/footer.php";
    ?>
    </body>
    </html>