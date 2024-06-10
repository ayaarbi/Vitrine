<?php
session_start();

// Retrieve and sanitize POST data
$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$genre = $_POST['genre'];
$ville = $_POST['ville'];
$code = $_POST['postal'];

try {
    $pdo = new PDO('mysql:host=localhost;dbname=vitrine', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $sql = "INSERT INTO membre (pseudo, `mot de passe`, nom, prenom, email, genre, ville, `code postal`) 
            VALUES (:pseudo, :mdp, :nom, :prenom, :email, :genre, :ville, :code_postal)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':mdp', $mdp);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':ville', $ville);
    $stmt->bindParam(':code_postal', $code);

    $stmt->execute();

    header('Location: profil_membre.php');
    exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
