<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM vijesti WHERE id = '$id'";
    $result = mysqli_query($dbc, $query) or die('Error querying database.');

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

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
    <title>Novosti RH - {$row['naslov']}</title>
</head>
<body>
    <header>
        <h1>Novosti RH</h1>
    </header>
    <nav>
        <ul>
            <li><h2><a href=\"/mywebsite/index.php\">POČETNA</a></h2></li>
            <li><h2><a href=\"/mywebsite/kategorija.php?kategorija=vijesti\">VIJESTI</a></h2></li>
            <li><h2><a href=\"/mywebsite/kategorija.php?kategorija=sport\">SPORT</a></h2></li>
            <li><h2><a href=\"/mywebsite/administracija.php\">Administracija</a></h2></li>
            <li><h2><a href=\"/mywebsite/registracija.php\">Registracija</a></h2></li>
        </ul>
    </nav>
    <section id=\"clanak\">
        <div class=\"news-item\">
            <h2>{$row['naslov']}</h2>
            <img src='/mywebsite/uploads/{$row['slika']}' alt='Slika'>
            <p>{$row['tekst']}</p>
        </div>
    </section>
    <footer>
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

    } else {
        echo "<p>Nije pronađena vijest s tim ID-om.</p>";
    }

    mysqli_close($dbc);
} else {
    echo "<p>ID vijesti nije zadan.</p>";
}
?>
