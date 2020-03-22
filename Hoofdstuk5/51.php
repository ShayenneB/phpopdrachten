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
        <main id="wrapper">
        <h2>Uitwerkingen</h2>

        <h1>
            RESTARIA KEES KROKET
        </h1>
        <br>
        <p>
            Visstraat 12<br>
            5211 DN 's-Hertogenbosch<br>
            073 613 6720<br>
            info@restariakeeskroket.nl
        </p>
        <form action="form_data.php" method="get" id="form1">
            <label for="bName">Bedrijfsnaam</label><br>
            <input type="text" id="bName" name="bName"><br>
            <label for="fName">Voornaam</label><br>
            <input type="text" id="fName" name="fName"><br>
            <label for="lName">Achternaam</label><br>
            <input type="text" id="lName" name="lName"><br>
            <label for="phone">Telefoon</label><br>
            <input type="text" id="phone" name="phone"><br>
            <label for="email">E-mail</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="message">Bericht</label><br>
            <input type="text" id="message" name="message"><br>
            <input type="submit" value="Versturen" id="submit"><br>
        </form>
        <br>
            <a href="../index.php">Terug</a>
    <?php
    include "../Includes/footer.php";
    ?>
    </body>
    </html>