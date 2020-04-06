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
<table>
    <tr>
        <td>Bedrijfsnaam:</td>
        <td><?php echo $_GET["bName"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>Voornaam:</td>
        <td><?php echo $_GET["fName"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>Achternaam:</td>
        <td><?php echo $_GET["lName"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>Telefoon:</td>
        <td><?php echo $_GET["phone"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><?php echo $_GET["email"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>bericht:</td>
        <td><?php echo $_GET["message"]; ?>.<br /></td>
    </tr>
</table>
<?php
include "../Includes/footer.php"
?>
</body>
</html>