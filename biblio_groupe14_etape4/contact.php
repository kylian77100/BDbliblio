<!DOCTYPE html>
<html>

<?php
require "head.php";
?>

<form method="post" action="receive.php"><br><br>


<fieldset>
              <legend><br><br><div class="contacter" align="center"><b>Nous contacter</b></div></legend>
                  <label for="name">Nom :</label>
                  <input type="text" id="name" name="name" autofocus required>
                  <label for="firstname">Prénom :</label>
                  <input type="text" id="first_name" name="first_name"  required>
                  <br>
                  <br>
                  
                  <input type="radio" id="part" name="client_type" value="Particulier">
                  <label for="part">Particulier</label>
                  <input type="radio" id="ent" name="client_type" value="Entreprise" selected>
                  <label for="ent">Entreprise</label>
                  
                  <br>
                  <br>
                  
                  <label for="mail">Courriel :</label>
                  <input type="mail" id="mail" name="mail" required><br>
                  
                  <br>
                  <select name="why_contact" required>
                  <label for="why_contact">Pourquoi nous contacter  ? </label>
                  <option value="livre en mauvais état">Livre en mauvais état</option>
                  <option value="manque de livres">Il n'y pas assez de livres sur BDbliothèque</option>
                  <option value="autre">Autres</option>
                  </select><br>
                  
                  <br>
                  <label for"addreq">Demmande particulière :</label><br>
                  <textarea id="addreq" name="addreq" placeholder="Entrez ici votre demmande"></textarea>
                  <br>
                  <button type="reset">Tout effacer</button><br><br>
                  
                  <br>
                  <div align="center"><button class="submit" type="submit">Confirmer</button></div>
                  </fieldset>


</body>
</html>
