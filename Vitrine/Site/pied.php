<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/pied.css">
    </head>
    <img src="photos/vtrine_pied.png" alt="vitrine"  width="750" height="220">
    <p>Avez-vous des questions? Cantactez-nous</p>
    <footer>
        <form action="./envoyer_email.php" method="get">
            <table>
                <tr>
                    <td class="lab">
                        <label for="titre">Titre: </label>
                    </td>
                    <td>
                        <input type="text" id="titre" name="titre"  >
                    </td>
                </tr>
                <tr>
                    <td class="lab">
                        <label for="sujet">Sujet: </label>
                    </td>
                    <td>
                        <input type="text" id="sujet" name="sujet">
                    </td>
                </tr>
                <tr>
                    <td class="lab">
                        <label for="description">Description: </label>
                    </td>
                    <td>
                        <input type="text" id="description" name="description">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Envoyer" onclick="envoyer()">
                        <script>
                            function envoyer(){
                                confirm("E-mail est envoyé avec succées")
                            }
                        </script>
                    </td>
                </tr>
            </table>
        </form>
    </footer>
</html>