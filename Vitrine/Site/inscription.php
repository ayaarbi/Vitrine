      
<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
        <link rel="stylesheet" href="css/index.css">
        <script src="js/dynamic.js"></script>
    </head>
    <body>
        <?php include "entete.php"; ?>
        <img src="photos/inscription.png" alt="inscription" width="750" height="220">
        <form action="./ins_bd.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="pseudo">Pseudo: </label>
                    </td>
                    <td>
                        <input type="text" id="pseudo" name="pseudo" placeholder="Votre Pseudo" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mdp">Mot de passe: </label>
                    </td>
                    <td>
                        <input type="password" id="mdp" name="mdp" placeholder="Votre Mot De Passe" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nom">Nom: </label>
                    </td>
                    <td>
                        <input type="text" id="nom" name="nom" placeholder="Votre Nom" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Prenom: </label>
                    </td>
                    <td>
                        <input type="text" id="prenom" name="prenom" placeholder="Votre Prénom" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">E-mail: </label>
                    </td>
                    <td>
                        <input type="email" id="email" name="email" placeholder="Votre E-mail" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="genre">Genre: </label>
                    </td>
                    <td>
                        <input type="text" id="genre" name="genre" placeholder="Votre Genre" required>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="ville">Ville: </label>
                    </td>
                    <td>
                        <input type="text" id="ville" name="ville" placeholder="Votre Ville" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="postal">Code postal: </label>
                    </td>
                    <td>
                        <input type="text" id="postal" name="postal" placeholder="Votre Code Postal" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="S'inscrire" onclick="test()">
                    </td>
                </tr>
            </table>
        </form>
        <?php include 'pied.php' ;?>   
    </body>
</html>