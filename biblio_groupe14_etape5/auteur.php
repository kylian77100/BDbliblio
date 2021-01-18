<?php


if(isset($_GET["perso"])){
            $idPersonne=$_GET["perso"];
          }

    
   $auteur = $link->query("SELECT prenom,nom FROM Personne WHERE id=$idPersonne")->fetch_assoc();
    $role = $link->query("SELECT libelle FROM Personne JOIN Auteur ON Auteur.idPersonne=Personne.id JOIN Role ON Auteur.idRole = Role.id WHERE Personne.id=$idPersonne GROUP BY libelle")->fetch_assoc();
    
    
echo "<div class='bd_grille'>";
    echo "<div align ='center' class='titre'><h1><b>".$auteur['prenom']." ".$auteur['nom'];
    //echo" (".$role['libelle'].")";
    echo"</b></h1><br>";



        $res = $link->query("SELECT Livre.titre,Livre.isbn FROM Livre JOIN Auteur ON Livre.isbn = Auteur.idLivre JOIN Personne ON Personne.id = Auteur.idPersonne WHERE Personne.id =$idPersonne");
        if($res)
        {
            echo"<ul>";
            while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
            {
                echo "<li><a href='".$row['isbn'].".php?isbn=".$row["isbn"]."'><b>".$row['titre']."</b></a></li><br>";
            }
            echo"</ul>";
        }
    


    echo "</div></div>";


?>
