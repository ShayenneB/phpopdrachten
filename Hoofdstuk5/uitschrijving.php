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
<table>
    <tr>
        <td>Voor en Achternaam</td>
        <td><?php echo $_GET["vaName"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>Studentnummer:</td>
        <td><?php echo $_GET["sNumber"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>Datum van uitschrijven:</td>
        <td><?php echo $_GET["dateUitschrijven"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>Reden van uitschrijven</td>
        <td><?php echo $_GET["reason"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>Leerjaar:</td>
        <td><?php echo $_GET["schoolYear"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>Succesklas?:</td>
        <td><?php echo $_GET["successClass"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>Data verwijderen?:</td>
        <td><?php echo $_GET["deleteData"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>reden uitschrijven?:</td>
        <td><?php echo $_GET["rWhy"]; ?>.<br /></td>
    </tr>
</table>    
    <a href="/phpopdrachten/index.php">Terug</a>
    <?php
    include "../Includes/footer.php";
    ?>
</body>
</html>