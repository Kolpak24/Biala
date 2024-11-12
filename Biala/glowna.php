<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glowna</title>
</head>

<style>
    body {background-color: black;}

    .biala {text-align: center; color: white; font-size: 36px;}

    .main{display: flex;}
    .menu {flex: 1; text-align: left; background-color: grey; color: white ; font-size: 24px;}
    .form {flex: 8  ; text-align: center; color: white; font-size: 26px;}
    .login{flex: 1; text-align: right; background-color: grey; color: white;font-size: 24px}

    button {width:125px; height: 25px;}
</style>

<body>
    <div class="biala">
    <h1>Stronnictwo bialej europy</h1>
    <img src="bialaeuropa.avif" height="311,5" width="512">
    </div>

    <div class="main">
    
        <div class="menu">
            <button type="button" onclick="location.href='poszukiwani.php'">POSZUKIWANI</button><br>
            <button type="button" onclick="location.href=''">SPRZYMIEŻENI</button><br>
        </div>

        <div class="form">
            W tym miejscu możesz na spokojnie mażyć o białej europie i dizelić się swoimi przemyśleniami z innymi wiernymi tej idei!
        </div>

        <div class="login">
            <button type="button" onclick="locaation.href='login.php'">Zaloguj sie</button><br>
            <button type="button" onclick="locaation.href='singup.php'">Zarejestruj sie</button><br>
        </div>

    </div>
</body>
</html>
