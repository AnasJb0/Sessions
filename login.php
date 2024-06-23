<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Login</title>
    <style>
        *{
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .formulaire{
            display: flex;
            justify-content: center;
            background-color: greenyellow;
            flex-direction: column;
            width: 400px;
            height: 300px;
            border-radius: 14px;
            margin-left: 400px;
            margin-top: 100px;
        }
        input{
            width: 200px;
        }
        button{
            margin-left: 160px;
        }

    </style>
</head>
<body>
    <div class="formulaire">
        <form action="" method="Post">
            <div class="row user ms-2">
                <label for="" class="col-sm-4">USER:</label>
                <input type="text" placeholder="Enter your name" required class="col-sm-6" name="username">
            </div>
            <div class=" row password mt-2 ms-2">
                <label for="" class="col-sm-4">PASSWORD:</label>
                <input type="password" required placeholder="Enter your password" class="col-sm-6" name="password">
            </div>
            <div class="row mt-3">
                <button type="submit" class="btn btn-primary col-sm-4">Connexion</button>
            </div>
        </form>
    </div>

    <?php

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['username'] = $username;

    $valid_username = 'user';
    $valid_password = '1234';

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['logged'] = true;
        header("Location: session.php");
        exit;
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}

if (isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}






?>
    
</body>
</html>