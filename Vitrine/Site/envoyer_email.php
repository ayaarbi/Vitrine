<!DOCTYPE html>
<html>
    <body>
        <?php
            $sujet= $_GET['sujet'];
            $description= $_GET['description'];
            $source=/*$_SESSION['user'];*/ $_GET['titre'];
            mail("sitevitrine@gmail.com",$sujet,$description,$source);
            header('Location: index.php');
        ?>
    </body>
</html>