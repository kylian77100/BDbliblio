<?php


if(isset($_GET["perso"])){
            $idPersonne=$_GET["perso"];
          }

echo "<div class='bd_grille'>";
    echo "<div align ='center' class='titre'><h1><b>".$titre['titre']."</b></h1><br>";



        $res = $link->query("SELECT Livre.titre FROM Livre JOIN Auteur ON Livre.isbn = Auteur.idLivre JOIN Personne ON Personne.id = Auteur.idPersonne WHERE Personne.id = $idper");
        if($res)
        {
            while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
            {
                echo "<b>row['titre']</b><br>";
            }
        }
    


    echo "</div></div>";


?>
