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
                $dbname = "Biala";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM poszukiwani";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<select name='poszukiwani'>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["imie"] . " " . $row["nazwisko"] . "</option>";
                    }
                    echo "</select>";
                    echo "<form method='post' action=''>";
                    echo "<input type='submit' value='Pokaż zdjęcie'>";
                    echo "</form>";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $selected_id = $_POST['poszukiwani'];
                        $sql = "SELECT zdjecie FROM poszukiwani WHERE id='$selected_id'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo "<img src='images/" . $row["zdjecie"] . "' alt='Zdjęcie'>";
                        } else {
                            echo "Brak zdjęcia";
                        }
                    }
                } else {
                    echo "0 results";
                }


                $conn->close();
                ?>




            </article>
        </article>
    </main>
    <footer>&copy; 2025 Maciej Płaza & Jakub Passowicz</footer>
</body>

</html>
