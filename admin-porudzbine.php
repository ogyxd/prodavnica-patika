<?php

include "baza.php";

$query = $db->query("SELECT * FROM `porudzbine`");
$result = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porudzbine</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header class="orders-header">
    <div class="logo">KrejaTike</div>
    <a href="./admin.php" class="btn">Nazad na dashboard</a>
</header>

<main class="orders-container">

    <h1>Sve porudzbine</h1>

    <div class="orders-list">

        <?php foreach($result as $p): ?>
            <div class="order-card">
                <div class="order-top">
                    <h3>Porudžbina #<?= $p["id"] ?></h3>
                </div>

                <p><strong>Ime:</strong> <?= $p["ime"] ?></p>
                <p><strong>Adresa:</strong> <?= $p["adresa"] ?>, <?= $p["grad"] ?>, <?= $p["postanskibroj"] ?></p>
                <p><strong>Telefon:</strong> <?= $p["telefon"] ?></p>
                <p><strong>Email:</strong> <?= $p["email"] ?></p>

                <div class="order-items">
                    <p><?= $p["patike"] ?></p>
                </div>

                <div class="order-total">
                    <strong>Cena: <?= $p["cena"] ?></strong>
                </div>
            </div>
        <?php endforeach; ?> 

    </div>

</main>

</body>
</html>