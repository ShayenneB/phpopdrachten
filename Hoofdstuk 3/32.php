<!DOCTYPE HTML>
    <html>
    <head>
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <meta charset="UTF-8">
        <link href="/phpopdrachten/css/style.css" rel="stylesheet">
    </head>
    <body>
    <header>
        <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
    </header>
        <?php
            // Declareren en initialiseren van de gewenste variabelen
            $trafficLightColor = "Groen";
            $ambulanceComing = True;

            // driveOn declareren en initialiseren
            $driveOn = true;

            if($trafficLightColor == "Groen" && $ambulanceComing == false)
            {
                $driveOn = true;
            }
            else if($trafficLightColor == "Groen" && $ambulanceComing == true)
            {
                $driveOn = false;
            }
            else if($trafficLightColor == "Oranje")
            {
                $driveOn = false;
            }
            else if($trafficLightColor == "Rood")
            {
                $driveOn = false;
            }
            else
            {
                $driveOn = true;
                echo("<p>foutje. Het stoplicht heeft een ongeldige kleur.</p>");
            }

            // Tonen van melding aan de automobilist
            if($driveOn == true)
            {
                echo("<h1 class ='Greentext'>U mag doorrijden.</h1>");
            }
            else
            {
                echo("<h1 style='color: red;'>U mag niet doorrijden.");
            }
        ?>

        <hr>

        <?php

            // Deel 2: Alcohol in verschillende landen opdracht
            $countryName = "Nederland";
            $currentAge = 18;


            // Tonen algemene gegevens drank
            echo("<p>Je woont in ". $countryName . " en je bent " . $currentAge . " jaar oud.</p>");


            // Tonen van de drank informatie Nederland
            if($countryName == "Nederland" && $currentAge >= 18)
            {
                echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
            }
            else if($countryName == "Nederland" && $currentAge < 18)
            {
                echo("<p>Hier mag je geen alcohol drinken.</p>");
            }



            // Tonen van de drank informatie België
            if($countryName == "België" && $currentAge >= 16 && $currentAge <= 18)
            {
                echo("<p>Je mag hier zwakke alcohol drinken.</p>");
            }
            else if($countryName == "België" && $currentAge >= 18)
            {
                echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
            }
            else if($countryName == "België" && $currentAge < 16)
            {
                echo("<p>hier mag je geen alcohol drinken.</p>");
            }



            // Tonen van de drank informatie Bulgarijë
            if($countryName == "Bulgarije" && $currentAge >= 18)
            {
                echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
            }
            else if($countryName == "Cyprus" && $currentAge < 17)
            {
                echo("<p>Hier mag je geen alcohol drinken.</p>");
            }



            // Tonen van de drank informatie Cyprus
            if($countryName == "Cyprus" && $currentAge >= 17)
            {
                echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
            }
            else if($countryName == "Cyprus" && $currentAge < 17)
            {
                echo("<p>Hier mag je geen alcohol drinken.</p>");
            }



            // Tonen van de drank informatie Zweden
            if($countryName == "Zweden" && $currentAge >= 18 && $currentAge <= 19)
            {
                echo("<p>Je mag hier zwakke alcohol drinken.</p>");
            }
            else if($countryName == "Zweden" && $currentAge >= 20)
            {
                echo("<p>Hier mag je sterke en zwakke alcohol drinken.</p>");
            }
            else if($countryName == "Zweden" && $currentAge < 18)
            {
                echo("<p>Hier mag je geen alcohol drinken.</p>");
            }


        ?>
    </main>
</body>
</html>
