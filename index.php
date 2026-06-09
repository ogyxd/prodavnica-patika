<?php

include "header.php";
include "baza.php";

$query = $db->query("SELECT * FROM `patike` LIMIT 3");
$result = $query->fetchAll();

?>

<section class="hero">
    <div class="hero-content">
        <h1>Zakoračite u udobnost i stil</h1>
        <p>Otkrijte vrhunske patike, sportsku i svakodnevnu obuću za svaku priliku.</p>
        <a href="./prodavnica.php" class="btn">Pogledaj ponudu</a>
    </div>
</section>

<main>
    <section class="featured">
        <h2>Izdvojeni modeli</h2>

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