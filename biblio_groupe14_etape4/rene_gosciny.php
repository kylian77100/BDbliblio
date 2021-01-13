<!DOCTYPE html>
<html>

<?php
require "head.php";
?>

<br><br><br>
<?php
    require "connexion_bdd.php"
?>



<?php
        $res = $link->query("SELECT Livre.titre FROM Livre JOIN Auteur ON Livre.isbn = Auteur.idLivre JOIN Personne ON Personne.id = Auteur.idPersonne WHERE Personne.nom='Gosciny' AND Personne.preno='René'");
        if($res)
        {
            while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
            {
                echo "<b>row['titre']</b><br>";
            }
        }
    ?>




</body>
</html>
