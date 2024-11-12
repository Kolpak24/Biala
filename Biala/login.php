<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<style>
    body {background-color: black;}
    h1 {text-align: center; color: white;}
    .login {text-align: center;}
</style>
<body>
    <h1>Zaloguj się przybyszu!</h1>
    <form class="login" method="post" action="slog.php">
        <input type="email" id="email" placeholder="E-Mail" required><br>
        <input type="password" id="password" placeholder="Haslo" required><br>
        <button type="submit" name="sub" onclick="slog.php">Zaloguj się</button>
    </form>
</body>
</html>