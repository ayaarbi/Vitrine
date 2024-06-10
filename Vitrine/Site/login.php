<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=vitrine', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $stmt = $pdo->prepare("SELECT * FROM membre WHERE pseudo = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_hash($password, $user['mot_de_passe'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['pseudo'] = $user['pseudo'];

                header('Location: profil_membre.php');
                //exit();
            } else {
                $error = "Mot de passe incorrect.";
                header('Location: index.php?error=' . urlencode($error));
                exit();
            }
        } else {
            $error = "Nom d'utilisateur incorrect.";
            header('Location: index.php?error=' . urlencode($error));
            exit();
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit();
    }
} else {
    // If the form is not submitted, redirect to the login page
    header('Location: index.php');
    exit();
}
?>
