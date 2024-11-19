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
    <form class="login" method="post" action="slogin.php">
        <input type="username" name="username" placeholder="username" required><br>
        <input type="email" name="email" placeholder="E-Mail" required><br>
        <input type="password" name="password" placeholder="Haslo" required><br>
        <button type="submit" name="sub" onclick="slog.php">Zaloguj się</button>
    </form>
</body>
</html>
