<?php
session_start();
if (!isset($_SESSION['pseudo'])) {
    header('Location: index.php');
    exit();
}

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: liste_produits.php');
    exit();
}

$id = intval($_GET['id']);

try {
    $pdo = new PDO('mysql:host=localhost;dbname=vitrine', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $stmt = $pdo->prepare("SELECT * FROM Produit WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        header('Location: liste_produits.php');
        exit();
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Fiche produit</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php include 'entete.php'; ?>
    <div id="div">
        <h2><?php echo htmlspecialchars($product['titre']); ?></h2>
        <p><strong>Catégorie:</strong> <?php echo htmlspecialchars($product['categorie']); ?></p>
        <p><strong>Référence:</strong> <?php echo htmlspecialchars($product['reference']); ?></p>
        <p><strong>Description:</strong> <?php echo htmlspecialchars($product['description']); ?></p>
        <p><strong>Couleur:</strong> <?php echo htmlspecialchars($product['couleur']); ?></p>
        <p><strong>Taille:</strong> <?php echo htmlspecialchars($product['taille']); ?></p>
        <p><strong>Prix:</strong> <?php echo htmlspecialchars($product['prix']); ?> €</p>
        <p><strong>Quantité en stock:</strong> <?php echo htmlspecialchars($product['quantite']); ?></p>
        <img src="<?php echo htmlspecialchars($product['photo']); ?>" alt="<?php echo htmlspecialchars($product['titre']); ?>">
    </div>
    <?php include 'pied.php'; ?>
</body>

</html>