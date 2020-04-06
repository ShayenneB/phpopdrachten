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
<?php
include "../Includes/functions.php"
?>
<table>
    <tr>
        <th>Vraag</th>
        <th>Antwoord</th>
    </tr>
    <tr>
        <th>Naam</th>
        <td><?php echo $_POST["First-LastName"]; ?></td>
    </tr>
    <tr>
        <th>Leeftijd</th>
        <td><?php echo $_POST["Age"]; ?></td>
    </tr>
    <tr>
        <th>Gemeente</th>
        <td><?php echo $_POST["Township"]; ?></td>
    </tr>
    <tr>
        <th>Inwoners</th>
        <td><?php echo $_POST["citizens"]; ?></td>
    </tr>
    <tr>
        <th>Aantal besmet</th>
        <td><?php echo $_POST["infected"]; ?></td>
    </tr>
    <tr>
        <th>Kennissen besmet</th>
        <td><?php echo $_POST["Question"]; ?></td>
    </tr>
    <tr>
        <th colspan="2">De kans is in realiteit groter omdat je via je eigen netwerk besmet kan raken.</th>
    </tr>
    <tr>
        <th>Kans per ontmoeting op besmetting</th>
        <td><?php echo echoKans(); ?>%</td>
    </tr>
    <tr>
        <th>Kans is 1 op</th>
        <td><?php echo getKans1Op(); ?>%</td>
    </tr>
    <tr>
        <td colspan="2">
            <?php echo vergelijkOorzaken(getKans1Op()); ?>
        </td>
    </tr>
</table>

<?php
include "../Includes/footer.php"
?>
</body>
</html>