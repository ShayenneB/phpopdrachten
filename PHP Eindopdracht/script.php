<?php 
$message = "";

// Array met gebruikers
    $users = array("Bert" => "jhasbdn", 
                   "Henk" => "2", 
                   "Sjaak" => "3", 
                   "Gertje" => "4", 
                   "Oets" => "5", 
                   "asd" => "6", 
                   "zxc" => "7", 
                   "qwe" => "8", 
                   "rty" => "9", 
                   "fgh" => "10"
                );
    
    // Naam en username ophalen
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check gegevens
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        foreach ($users as $key => $value) {
            if ($key == $username) {
                if ($users[$username] == $password) {
                    $message = "<p>Welkom $username</p>";
                    $showLoginScreen = false;
                }
                else{
                    $message = "<p style='color: red'>Foutieve username en / of password</p>";
                }
            }
        }
    }
    echo $message;
?>