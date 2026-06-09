<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kod = $_POST["kod"];
    if ($kod == "TAJNIKOD") {
        session_start();
        $_SESSION["kod"] = $kod;
        header("Location: ./admin.php");
    } else {
        header("Location: ./admin-login.php?invalid=true");
    }
}

?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Prijava | KrejaTike</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <h1>Admin Prijava</h1>
            <p>Unesite pristupni kod</p>

            <form method="POST">
                <input name="kod" type="password" placeholder="Pristupni kod" required>
                <button type="submit">Prijavi se</button>
            </form>

            <?php if (isset($_GET["invalid"])) { ?>
                <span class="msg">Pogresan kod!</span>
            <?php } ?>
        </div>
    </div>
</body>
</html>