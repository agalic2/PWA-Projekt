<?php
include 'connect.php'; 

if (isset($_GET['kategorija'])) {
    $kategorija = $_GET['kategorija'];

    $query = "SELECT * FROM vijesti WHERE kategorija = '$kategorija' AND arhiva = 0";
    $result = mysqli_query($dbc, $query) or die('Error querying database.');

    echo "<!DOCTYPE html>
<html lang=\"hr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/ab4f60abf5.js\" crossorigin=\"anonymous\"></script>
    <title>PWA Projekt - $kategorija</title>
</head>
<body>
    <header>
        <h1>Novosti RH - $kategorija</h1>
    </header>
    <nav>
        <ul>
            <li><h2><a href=\"/mywebsite/index.php\">POČETNA</a></h2></li>
            <li><h2><a href=\"/mywebsite/kategorija.php?kategorija=vijesti\">VIJESTI</a></h2></li>
            <li><h2><a href=\"/mywebsite/kategorija.php?kategorija=sport\">SPORT</a></h2></li>
            <li><h2><a href=\"/mywebsite/administracija.php\">Administracija</a></h2></li>
            <li><h2><a href=\"/mywebsite/registracija.php\">Registracija</a></h2></li>
        </ul>
    </nav>";

    echo "<section id=\"$kategorija\">";
    echo "<h2>$kategorija</h2>";
    echo "<div class=\"flex-container\">";

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='news-item'>";
            echo "<h3><a href='clanak.php?id={$row['id']}'>{$row['naslov']}</a></h3>";
            echo "<p>{$row['sazetak']}</p>";
            echo "<img src='/mywebsite/uploads/{$row['slika']}' alt='Slika'>";
            echo "</div>";
        }
    } else {
        echo "<p>Nema vijesti za prikaz u kategoriji $kategorija.</p>";
    }

    echo "</div>";
    echo "</section>";
    echo "<footer>
        <section>
            <div>
                <i class=\"fa-brands fa-x-twitter\" style=\"color: #ffffff; font-size: 70px;\"></i>
                <a href=\"#\">Novosti-RH</a>
                <p>ZAPRATITE NAS NA X-u</p>
            </div>
            <div>
                <h3>Novi članak: <a href=\"unos.php\"><button>TU</button></a></h3>
                <p>&copy; 2024 Novosti RH Vijesti. Sva prava zadržana.</p>
            </div>
        </section>
    </footer>
</body>
</html>";

    mysqli_close($dbc);
} else {
    echo "<p>Nije odabrana kategorija vijesti.</p>";
}
?>
