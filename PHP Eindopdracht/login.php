<!DOCTYPE html>
<html lang="en">
<?php 
    include "../Includes/header.php";
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
    <?php 
        $showLoginScreen = true;
        include "script.php";

        if ($showLoginScreen == true) { 
    ?>
        <h1 style='text-align: center;'>Bergheen</h1>
        <p style='text-align: center;'>Login om onze adresgegevens + openingstijden te zien</p>
        <form action="login.php" method="POST">
            <table>
                <tr>
                    <td>username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>
        </form>
        <?php 
            }
            else
            {
        ?>
        <h1 style='text-align: center;'>Bergheen</h1>
        <fieldset>
            <legend>Openingstijden</legend>
            Do: 22:00 <br>
            Vr: All day <br>
            Za: All day <br>
            Zo: 12:00
        </fieldset>
        <fieldset>
            <legend>Adresgegevens</legend>
            Am Wriezener Bahnhof <br>
            10243 Berlin <br>
            Duitsland
        </fieldset>
        <p>Deze gegevens dien je ten alle tijden geheim te houden!</p>
        <?php 
            }
        ?>
        <?php
            include "../Includes/footer.php";
        ?>
    </body>
</html>