<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glowna</title>
</head>

<style>
    * {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    body {
        background-color: black; 
        text-align: center;
    }
    button {
        width: 100%;
        padding: 10px;
        font-size: 16px;
    }
    .sec1 {
        color: white
    }
    .sec2 {
        display: flex;
    }
    .login {
        flex: 1;
        color: white;
        text-align: right;

    }
    .text1 {
        flex: 5;
        color: white;
        text-align: center;
        font-size: 22px;
    }
    .poszsprzy {
        text-align: left;
        flex: 1
    }
</style>

<body>
    <section class="sec1">
        <header class="header1">
            <h1>Stronnictwo białej europy</h1>
            <img src="bialaeuropa.avif" height="311,5" width="512">
        </header>
    </section>
    <section class="sec2">
        <section class="login">
            <button type="button" onclick="location.href='login.php'">Zaloguj sie</button><br>
            <button type="button" onclick="location.href='singup.php'">Zajerestruj sie</button><br>
        </section>
        <section class="text1">
            <p>W tym miejscu możesz na spokojnie mażyć o białej europie i dizelić się swoimi przemyśleniami z innymi wiernymi tej idei!</p>
        </section>
        <section class="poszsprzy">
            <button type="button" onclick="location.href='poszukiwani.php'">POSZUKIWANI</button><br>
            <button type="button" onclick="location.href=''">SPRZYMIEŻENI</button><br>
        </section>
    </section>
</body>
</html>
