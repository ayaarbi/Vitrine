<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

try {
    $pdo = new PDO('mysql:host=localhost;dbname=vitrine', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $stmt = $pdo->prepare("SELECT * FROM membre WHERE id = :user_id");
    $stmt->bindParam(':user_id', $_SESSION['user_id']);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Profil</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <?php include "entete.php"; ?>
        <img src="photos/profil.png" alt="profil" width="750" height="220"><br><br><br>
        <table class="tb">
            <tr>
                <td>
                    <label for="pseudo">Pseudo: </label>
                </td>
                <td>
                    <?= htmlspecialchars($user['pseudo']) ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nom">Nom et Prénom: </label>
                </td>
                <td>
                    <?= htmlspecialchars($user['nom']) ?> <?= htmlspecialchars($user['prenom']) ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">E-mail: </label>
                </td>
                <td>
                    <?= htmlspecialchars($user['email']) ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="genre">Genre: </label>
                </td>
                <td>
                    <?= htmlspecialchars($user['genre']) ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ville">Ville: </label>
                </td>
                <td>
                    <?= htmlspecialchars($user['ville']) ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="postal">Code postal: </label>
                </td>
                <td>
                    <?= htmlspecialchars($user['code postal']) ?>
                </td>
            </tr>
        </table>
        <?php include "pied.php"; ?>
    </body>
</html>
