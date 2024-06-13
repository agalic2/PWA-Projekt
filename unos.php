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
    <title>Unos novog članka</title>
</head>
<body>

    <header>
        <h1>Novosti RH</h1>
    </header>
    
    <nav>
        <ul>
            <li><h2><a href="/mywebsite/index.php">POČETNA</a></h2></li>
            <li><h2><a href="/mywebsite/index.php#news">VIJESTI</a></h2></li>
            <li><h2><a href="/mywebsite/index.php#sport">SPORT</a></h2></li>
            <li><h2><a href="/mywebsite/administracija.php">Administracija</a></h2></li>
            <li><h2><a href="/mywebsite/registracija.php">Registracija</a></h2></li>
        </ul>
    </nav>

    <div class="main-content">
        <section>
            <h2>Unos Vijesti</h2>
            <form action="skripta.php" method="POST" enctype="multipart/form-data">
                <label for="naslov">Naslov vijesti:</label>
                <input type="text" id="naslov" name="naslov" required>

                <label for="sazetak">Kratki sažetak vijesti:</label>
                <textarea id="sazetak" name="sazetak" rows="4" required></textarea>

                <label for="tekst">Tekst vijesti:</label>
                <textarea id="tekst" name="tekst" rows="8" required></textarea>

                <label for="kategorija">Kategorija vijesti:</label>
                <select id="kategorija" name="kategorija" required>
                    <option value="vijesti">Vijesti</option>
                    <option value="sport">Sport</option>
                </select>

                <label for="slika">Odaberi sliku:</label>
                <input type="file" id="slika" name="slika" accept="image/*" required>

                <label>
                    <input type="checkbox" name="arhiva" value="da" checked>
                    Arhivirati vijest
                </label>

                <input type="submit" value="Pošalji vijest">
            </form>
        </section>
    </div>

    <footer>
        <section>
            <div>
                <i class="fa-brands fa-x-twitter" style="color: #ffffff; font-size: 70px;"></i>
                <a href="#">Novosti-RH</a>
                <p>ZAPRATITE NAS NA X-u</p>
            </div>
            <div>
                <h3>Novi članak: <a href="skripta.php"><button>TU</button></a></h3>
                <p>&copy; 2024 Novosti RH Vijesti. Sva prava zadržana.</p>
            </div>
        </section>
    </footer>
</body>
</html>
