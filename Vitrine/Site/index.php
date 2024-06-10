<?php
session_start();

// If the user is already logged in, redirect to the profile page
if (isset($_SESSION['user_id'])) {
    header('Location: profil_membre.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <?php include 'entete.php'; ?>
        <img id="cnx" src="photos/connexion.png" alt="connexion" width="750" height="220">
        <form action="login.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="username">Pseudo :</label>
                    </td>
                    <td>
                        <input type="text" id="username" name="username" required placeholder="Votre Pseudo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Mot de passe :</label>
                    </td>
                    <td>
                        <input type="password" id="password" name="password" required placeholder="Votre Mot De Passe">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">Se connecter</button>
                    </td>
                </tr>
            </table>
        </form>
        <?php if (isset($error)): ?>
            <p style="color:red;"><?= $error ?></p>
        <?php endif; ?>
        <p>Pas encore inscrit ? <a href="/Site/inscription.php" id="ins">Inscrivez-vous ici</a>.</p>
        <?php include 'pied.php'; ?>
    </body>
</html>
