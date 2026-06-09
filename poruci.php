<?php

include "baza.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $_POST["ime"];
    $adresa = $_POST["adresa"];
    $grad = $_POST["grad"];
    $postanskibroj = $_POST["postanskibroj"];
    $telefon = $_POST["telefon"];
    $email = $_POST["email"];
    $naziv = $_POST["patike"];
    $cena = $_POST["cena"];
    

    $sql = "INSERT INTO `porudzbine` (`patike`, `cena`, `ime`, `adresa`, `grad`, `postanskibroj`, `telefon`, `email`) VALUES ('$naziv', '$cena', '$ime', '$adresa', '$grad', '$postanskibroj', '$telefon', '$email')";

    $db->exec($sql);

    header("Location: ./index.php?poruceno=jeste");
}

?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porudžbina</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header class="checkout-header">
    <div class="logo">KrejaTike</div>
    <a href="./index.php" class="btn">Nazad u prodavnicu</a>
</header>

<main class="checkout-container">

    <section class="checkout-form">
        <h1>Podaci za dostavu</h1>

        <form method="POST">
            <input name="ime" type="text" placeholder="Ime i prezime" required>
            <input name="adresa" type="text" placeholder="Adresa" required>
            <input name="grad" type="text" placeholder="Grad" required>
            <input name="postanskibroj" type="text" placeholder="Poštanski broj" required>
            <input name="telefon" type="text" placeholder="Telefon" required>
            <input name="email" type="text" placeholder="Email" required>
            <input type="hidden" value="<?php echo $_GET['naziv'] ?>" name="patike">
            <input type="hidden" value="<?php echo $_GET['cena'] ?>" name="cena">

            <button type="submit">Potvrdi porudžbinu</button>
        </form>
    </section>

    <section class="checkout-summary">
        <h2>Tvoja porudžbina</h2>

        <div class="summary-card">
            <p><?= $_GET["naziv"] ?></p>
        </div>

        <div class="summary-total">
            <h3><?= $_GET["cena"] ?> €</h3>
        </div>
    </section>

</main>