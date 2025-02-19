<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biała Europa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <h3 class="h3_name">Organizacja</h3>
        <h1 class="h1_name">BIAŁA EUROPA</h1>
    </nav>
    <main>
        <menu class="left_menu">
            <ul class="ul_menu">
                <li class="li_menu"><a href="index.php">Główna</a></li>
                <li class="li_menu"><a href="art.php">Artykuły</a></li>
                <li class="li_menu"><a href="wrogowie.php">Wrogowie</a></li>
                <li class="li_menu"><a href="straceni.php">Straceni</a></li>
                <li class="li_menu"><a href="poszukiwani.php">Poszukiwani</a></li>
            </ul>
        </menu>
        <article class="art">
            <article class="article">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "poszukiwani";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                // $conn->close();
                ?>



            </article>
        </article>
    </main>
    <footer>&copy; 2025 Maciej Płaza & Jakub Passowicz</footer>
</body>

</html>