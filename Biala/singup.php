<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <style>
        body {background-color: black;}
        h1 {text-align: center; color: white;}
        .login {text-align: center;}
    </style>
</head>
<body>
    <h1>Zarejestruj się przybyszu!</h1>
    <form class="login" method="post" action="ssingup.php">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="E-Mail" required><br>
        <input type="password" name="password" placeholder="Haslo" required><br>
        <button type="submit" name="sub" onclick="ssingup.php">Zarejestruj się</button>
    </form>
</body>
</html>
