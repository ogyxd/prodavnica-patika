<?php

include "header.php";
include "baza.php";

$query = $db->query("SELECT * FROM `patike`");
$result = $query->fetchAll();

?>

<main>
    <section class="shop-header">
        <h1>Svi modeli</h1>
        <p>Pogledajte kompletnu ponudu obuće.</p>
    </section>

    <section class="shop-products">
        <div class="products">

            <?php foreach ($result as $prod): ?>
                <div class="card">
                    <img src="<?php echo $prod["slika"] ?>">
                    <h3><?php echo $prod["naziv"] ?></h3>
                    <p><?php echo $prod["cena"] ?> €</p>
                    <a href="./poruci.php?id=<?php echo $prod["id"] ?>&naziv=<?php echo $prod["naziv"] ?>&cena=<?php echo $prod["cena"] ?>" class="order-btn">Poruči</a>
                </div>
            <?php endforeach; ?>

        </div>
    </section>
</main>

<?php include "footer.php"; ?>