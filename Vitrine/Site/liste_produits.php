<?php
session_start();
if (!isset($_SESSION['pseudo'])) {
    header('Location: index.php');
    exit();
}

try {
    $pdo = new PDO('mysql:host=localhost;dbname=vitrine', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $sql = "SELECT id, categorie, titre, reference FROM Produit";
    $stmt = $pdo->query($sql);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nos Produits</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <?php include 'entete.php'; ?>
        <img id="cnx" src="photos/prodiuts.png" alt="connexion" width="750" height="220">
        <table class="tb">
            <tr>
                <th>ID</th>
                <th>Catégorie</th>
                <th>Titre</th>
                <th>Référence</th>
                <th>Détails</th>
            </tr>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['id']); ?></td>
                    <td><?php echo htmlspecialchars($product['categorie']); ?></td>
                    <td><?php echo htmlspecialchars($product['titre']); ?></td>
                    <td><?php echo htmlspecialchars($product['reference']); ?></td>
                    <td><a href="fiche_produit.php?id=<?php echo htmlspecialchars($product['id']); ?>">Détails</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php include 'pied.php'; ?>
    </body>
</html>