    <!DOCTYPE HTML>
    <html>
    <head>
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
    include "../Includes/header.php";
    ?>
        <h1>
            Uitschrijfformulier KW1C
        </h1>
    <form action="uitschrijving.php" method="get">
    <table>
    <tr>
        <td><label for="vaName">Voor en achternaam</label></td>
        <td><input type="text" id="vaName" name="vaName"></td>
    </tr>
    <tr>
        <td><label for="sNumber">Studentnummer</label></td>
        <td><input type="text" id="sNumber" name="sNumber"></td>
    </tr>
    <tr>
        <td><label for="dateUitschrijven">Datum van uitschrijving</label></td>
        <td><input type="text" id="dateUitschrijven" name="dateUitschrijven"></td>
    </tr>
    <tr>
        <td>
            <label for="reason">Reden van uitschrijving</label><br>
        </td>
        <td>
            <select name="reason">
                <option value="Geen leuke opleiding">Geen leuke opleiding</option>
                <option value="Andere keuze">Andere keuze</option>
                <option value="Aardbei">Aardbei</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="year">Leerjaar</label><br>
        </td>
        <td name="year">
            <input type="radio" name="schoolYear" value="1e leerjaar"> 1e leerjaar<br>
            <input type="radio" name="schoolYear" value="2e leerjaar"> 2e leerjaar<br>
            <input type="radio" name="schoolYear" value="3e leerjaar"> 3e leerjaar<br>
        </td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" id="successClass" name="successClass" value="Ik wil me aanmelden bij de successklas.">
            <label for="successClass">Ik wil me aanmelden bij de successklas</label><br>
            <input type="checkbox" id="deleteData" name="deleteData" value="Verwijder mijn gegevens uit het systeem.">
            <label for="deleteData">Verwijder mijn gegevens uit het systeem</label><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="redenUitschrijven">Schrijf hieronder de reden van je uitschrijving op</label><br>
            <input type="text" id="rWhy" name="rWhy" width="1000" height="500">
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="Versturen" id="submit">
        </td>
    </tr>
    </form>
    </table>
            <a href="/phpopdrachten/index.php">Terug</a>
    <?php
    include "../Includes/footer.php";
    ?>
    </body>
    </html>