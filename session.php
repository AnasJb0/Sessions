<?php
session_start();

if (!isset($_SESSION['logged']) || $_SESSION['logged'] != true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <?php

    if(isset($_SESSION["username"])){
    echo "Welcome Sir ".$_SESSION["username"].".You can disconnect with the button. <br>"; 
    echo '<button type="submit" class="btn btn-warning"><a href="deconnexion.php">Deconnexion</a></button>';
    }
?>

</body>
</html>
