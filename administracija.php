<?php
include 'connect.php';

// Funkcija za brisanje vijesti
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $delete_query = "DELETE FROM vijesti WHERE id = '$id'";
    mysqli_query($dbc, $delete_query) or die('Error deleting news.');
}

$query = "SELECT * FROM vijesti";
$result = mysqli_query($dbc, $query) or die('Error querying database.');
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ab4f60abf5.js" crossorigin="anonymous"></script>
    <title>Administracija - Novosti RH</title>
</head>
<body>
    <header>
        <h1>Novosti RH - Administracija</h1>
    </header>
    <nav>
        <ul>
            <li><h2><a href="/mywebsite/index.php">POČETNA</a></h2></li>
            <li><h2><a href="/mywebsite/kategorija.php?kategorija=vijesti">VIJESTI</a></h2></li>
            <li><h2><a href="/mywebsite/kategorija.php?kategorija=sport">SPORT</a></h2></li>
            <li><h2><a href="/mywebsite/administracija.php">Administracija</a></h2></li>
            <li><h2><a href="/mywebsite/registracija.php">Registracija</a></h2></li>
        </ul>
    </nav>

    <section id="admin">
        <h2>Administracija vijesti</h2>
        <div class="flex-container">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='news-item'>";
                echo "<h3>{$row['naslov']}</h3>";
                echo "<p>{$row['sazetak']}</p>";
                echo "<img src='/mywebsite/uploads/{$row['slika']}' alt='Slika'>";
                echo "<form action='' method='post'>";
                echo "<input type='hidden' name='delete' value='{$row['id']}'>";
                echo "<button type='submit'>Izbriši</button>";
                echo "</form>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

    <footer>
        <section>
            <div>
                <i class="fa-brands fa-x-twitter" style="color: #ffffff; font-size: 70px;"></i>
                <a href="#">Novosti-RH</a>
                <p>ZAPRATITE NAS NA X-u</p>
            </div>
            <div>
                <h3>Novi članak: <a href="unos.php"><button>TU</button></a></h3>
                <p>&copy; 2024 Novosti RH Vijesti. Sva prava zadržana.</p>
            </div>
        </section>
    </footer>
</body>
</html>

<?php mysqli_close($dbc); ?>
