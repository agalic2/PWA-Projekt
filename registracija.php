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
    <title>Registracija</title>
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
            <h2>Registracija</h2>
            <form action="registracija_skripta.php" method="POST">
                <label for="korisnicko_ime">Korisničko ime:</label>
                <input type="text" id="korisnicko_ime" name="korisnicko_ime" required>

                <label for="ime">Ime:</label>
                <input type="text" id="ime" name="ime" required>

                <label for="prezime">Prezime:</label>
                <input type="text" id="prezime" name="prezime" required>

                <label for="lozinka">Lozinka:</label>
                <input type="password" id="lozinka" name="lozinka" required>

                <label for="lozinka_potvrda">Ponovite lozinku:</label>
                <input type="password" id="lozinka_potvrda" name="lozinka_potvrda" required>

                <input type="submit" value="Registriraj se">
            </form>

            <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                <p style="color: green;">Uspješna registracija. <a href="login.php">Prijavite se ovdje</a>.</p>
            <?php endif; ?>

            <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                <p style="color: red;">Lozinke se ne podudaraju. Molimo pokušajte ponovno.</p>
            <?php endif; ?>
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
