<?php

include "baza.php";

session_start();

if ($_SESSION["kod"] != "TAJNIKOD") {
    header("Location: ./admin-login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naziv = $_POST["naziv"];
    $cena = $_POST["cena"];
    $slika = $_POST["slika"];

    $db->exec("INSERT INTO `patike` (`naziv`, `cena`, `slika`) VALUES ('$naziv', '$cena', '$slika')");

    header("Location: ./admin.php");
}

$query = $db->query("SELECT * FROM `patike`");
$result = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | KrejaTike</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header class="admin-header">
    <h1>Admin Dashboard</h1>
    <a href="./admin-porudzbine.php" class="btn">Porudzbine</a>
</header>

<main class="admin-container">

    <section class="admin-form">
        <h2>Dodaj obuću</h2>

        <form method="POST">
            <input type="text" name="naziv" placeholder="Naziv proizvoda">
            <input type="text" name="cena" placeholder="Cena">
            <input type="text" name="slika" placeholder="URL slike">
            <button type="submit">Dodaj proizvod</button>
        </form>
    </section>

    <section class="admin-list">
        <h2>Proizvodi</h2>

        <div class="products">

            <?php foreach ($result as $prod): ?>
                <div class="card">
                    <img src="<?php echo $prod["slika"] ?>">
                    <h3><?php echo $prod["naziv"] ?></h3>
                    <p><?php echo $prod["cena"] ?> €</p>
                    <a href="./obrisi-patiku.php?id=<?php echo $prod["id"] ?>" class="delete-btn">Obriši</a>
                </div>
            <?php endforeach; ?>

        </div>
    </section>

</main>

</body>
</html>