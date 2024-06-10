<?php
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/entete.css">
    </head>
    <body>
        <header>
            <div>
                <img id="logo" src="photos/vitrine.png" alt="logo" width="220" height="220" >
                <img src="photos/Vitrine_tx.png" alt="logo" width="750" height="220">
            </div>
            <nav>
                <a href="./profil_membre.php">Profil</a>
                <a href="./liste_produits.php">Nos Produits</a>
                <a href="?logout">Se déconnecter</a>
            </nav>
        </header>
    </body>
</html>