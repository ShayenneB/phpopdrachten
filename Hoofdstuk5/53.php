<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        opdracht 5.3
    </title>

    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
</head>
<body>
<?php
include "../Includes/header.php"
?>
<form action="form_data5.3.php" method="post">

    <label>Corona enquete:</label><br>
    <hr>
    <label>Wat is je naam:</label><input name="First-LastName" type="text"><br>
    <label>Wat is je leeftijd:</label><input name="Age" type="number"><br>
    <label>Gemeente:</label>
    <select name="Township">
        <option value="Den Bosch">Den Bosch</option>
        <option value="Vught">Vught</option>
        <option value="Oss">Oss</option>
        <option value="Veendam">Veendam</option>
    </select><br>
    <label>Aantal inwoners gemeente:</label><input name="citizens" type="number"><br>
    <label>Ken je mensen die besmet zijn in je woonplaats?</label>
            <input name="Question" type="radio" value="Ja">Ja</input>
            <input name="Question" type="radio" value="Nee">Nee</input><br>
    <label>Aantal mensen besmet in je gemeente?*</label><input name="infected" type="number"><br>
    <input type="submit" name="verzenden" value="verzenden"><br>
    <label>* Zie aantallen per gemeente per 100.000 bewoners <a href="https://www.rivm.nl/coronavirus-kaart-van-nederland-per-gemeente" target="_blank">site RIVM</a></label>

</form>
<?php
include "../Includes/footer.php"
?>
</body>
</html>