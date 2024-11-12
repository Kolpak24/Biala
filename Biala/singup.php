<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
</head>
<style>
    body {background-color: black;}
    h1 {text-align: center; color: white;}
    .login {text-align: center;}
</style>
<body>
    <h1>Zarejestruj się przybyszu!</h1>
    <form class="login" method="post" action="slog.php">
        <input type="text" id="username" placeholder="Username" required><br>
        <input type="email" id="email" placeholder="E-Mail" required><br>
        <input type="password" id="password" placeholder="Haslo" required><br>
        <button type="submit" name="sub" onclick="slog.php">Zarejestruj się</button>
    </form>
</body>
</html>