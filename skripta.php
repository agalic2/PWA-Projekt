<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "novostirh";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$naslov = htmlspecialchars($_POST["naslov"]);
$sazetak = htmlspecialchars($_POST["sazetak"]);
$tekst = htmlspecialchars($_POST["tekst"]);
$kategorija = htmlspecialchars($_POST["kategorija"]);
$slikaNaziv = $_FILES['slika']['name'];  
$slikaTmp = $_FILES['slika']['tmp_name']; 
$slikaDest = $_SERVER['DOCUMENT_ROOT'] . '/mywebsite/uploads/' . $slikaNaziv;
$arhiva = isset($_POST['arhiva']) ? 1 : 0; 
$datumUnosa = date('Y-m-d H:i:s'); 

if (move_uploaded_file($slikaTmp, $slikaDest)) {
    $sql = "INSERT INTO vijesti (naslov, sazetak, tekst, kategorija, slika, arhiva, datum_unosa) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssis", $naslov, $sazetak, $tekst, $kategorija, $slikaNaziv, $arhiva, $datumUnosa);
    
    if ($stmt->execute()) {
        echo "<p><strong>Naslov članka:</strong> $naslov</p>";
        echo "<p><strong>Kratki sažetak članka:</strong> $sazetak</p>";
        echo "<img src='/mywebsite/uploads/$slikaNaziv' alt='Slika'>";
        echo "<p><strong>Tekst članka:</strong></p>";
        echo "<p>$tekst</p>";
        echo "<p><strong>Kategorija članka:</strong> $kategorija</p>";
        
        if ($arhiva == 1) {
            echo "<p><strong>Arhiviran:</strong> Da</p>";
        } else {
            echo "<p><strong>Arhiviran:</strong> Ne</p>";
        }
        
        echo "<p><strong>Datum unosa:</strong> $datumUnosa</p>";
    } else {
        echo "Greška prilikom unosa podataka: " . $stmt->error;
    }
    
    $stmt->close();
} else {
    echo "Pogreška prilikom preuzimanja slike.";
}

$conn->close();
?>
