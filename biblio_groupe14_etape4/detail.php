<?php
    require "connexion_bdd.php";
if(isset($_GET["isbn"])){
            $id=$_GET["isbn"];
          }
    
    $titre = $link->query("SELECT titre FROM Livre WHERE isbn=$id")->fetch_assoc();
    $date = $link->query("SELECT annee FROM Livre WHERE isbn=$id")->fetch_assoc();
    $genre = $link->query("SELECT Genre.libelle FROM Livre JOIN Genre ON Genre.id = Livre.genre WHERE isbn=$id")->fetch_assoc();
    $nbpages = $link->query("SELECT nbpages FROM Livre WHERE isbn=$id")->fetch_assoc();
    $editeur = $link->query("SELECT Editeur.libelle FROM Livre JOIN Editeur ON Editeur.id = Livre.editeur WHERE isbn=$id")->fetch_assoc();
    $prenom_aut = $link->query("SELECT Personne.prenom FROM Livre JOIN Auteur ON Livre.isbn = Auteur.idLivre JOIN Personne ON Personne.id = Auteur.idPersonne JOIN Role ON Role.id = Auteur.idRole WHERE isbn=$id AND Role.libelle='Auteur'")->fetch_assoc();
    $id_aut = $link->query("SELECT Personne.id FROM Livre JOIN Auteur ON Livre.isbn = Auteur.idLivre JOIN Personne ON Personne.id = Auteur.idPersonne JOIN Role ON Role.id = Auteur.idRole WHERE isbn=$id AND Role.libelle='Auteur'")->fetch_assoc();
    $nom_aut = $link->query("SELECT Personne.nom FROM Livre JOIN Auteur ON Livre.isbn = Auteur.idLivre JOIN Personne ON Personne.id = Auteur.idPersonne JOIN Role ON Role.id = Auteur.idRole WHERE isbn=$id AND Role.libelle='Auteur'")->fetch_assoc();
    $prenom_ilus = $link->query("SELECT Personne.prenom FROM Livre JOIN Auteur ON Livre.isbn = Auteur.idLivre JOIN Personne ON Personne.id = Auteur.idPersonne JOIN Role ON Role.id = Auteur.idRole WHERE isbn=$id AND Role.libelle='Illustrateur'")->fetch_assoc();
    $id_ilus = $link->query("SELECT Personne.id FROM Livre JOIN Auteur ON Livre.isbn = Auteur.idLivre JOIN Personne ON Personne.id = Auteur.idPersonne JOIN Role ON Role.id = Auteur.idRole WHERE isbn=$id AND Role.libelle='Illustrateur'")->fetch_assoc();
    $nom_ilus = $link->query("SELECT Personne.nom FROM Livre JOIN Auteur ON Livre.isbn = Auteur.idLivre JOIN Personne ON Personne.id = Auteur.idPersonne JOIN Role ON Role.id = Auteur.idRole WHERE isbn=$id AND Role.libelle='Illustrateur'")->fetch_assoc();
    
    
    echo "<div class='bd_grille'>";
    echo "<div align ='center' class='titre'><h1><b>".$titre['titre']."</b></h1><br>";
    
    
		echo "<br>";
		echo "<img src='img/".$id.".jpg'  height='777,515625' width='590,625'>";
		echo "<p><a href='".$id_aut['id'].".php?perso=".$id_aut['id']."'>Auteur: ".$prenom_aut['prenom']." ".$nom_aut['nom']."</a></p>";
		echo "<p><a href='".$id_ilus['id'].".php?perso=".$id_ilus['id']."'>Illustrateur: ".$prenom_ilus['prenom']." ".$nom_ilus['nom']."</a></p>";
		echo "<p>Date de parution: ".$date['annee']."</p>";
		echo "<p>Editeur: ".$editeur['libelle']."</p>";
		echo "<p>Nombres de pages:".$nbpages['nbpages']."</p>";
		echo "<p>Genre: ".$genre['libelle']."</p>";
		echo "<p>Numéro isbn: ".$id."</p>";
    
    
    echo "</div></div>";
    
?>
