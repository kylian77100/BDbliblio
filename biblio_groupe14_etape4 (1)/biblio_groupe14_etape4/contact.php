<!DOCTYPE html>
<html>

<?php
require "head.php";
?>

<form method="post" action="receive.php"><br><br>


<fieldset>
              <legend><br><br><div class="contacter" align="center"><b>Nous contacter</b></div></legend>
                  <label for="name">Nom :</label>
                  <input type="text" id="name" name="client_name" autofocus required>
                  <label for="firstname">Prénom :</label>
                  <input type="text" id="firstname" name="client_firstname"  required>
                  <br>
                  <br>
                  
                  <input type="radio" id="part" name="client_type" value="Particulier">
                  <label for="part">Particulier</label>
                  <input type="radio" id="ent" name="client_type" value="Entreprise" selected>
                  <label for="ent">Entreprise</label>
                  
                  <br>
                  <br>
                  
                  <label for="mail">Courriel :</label>
                  <input type="mail" id="mail" name="client_mail" required><br>
                  
                  <br>
                  <label for="duration">Pourquoi nous contacter  ? <label>
                  <select>
                  <option value="1y">Livre en mauvais état</option>
                  <option value="2y">Il n'y pas assez de livres sur BDbliothèque</option>
                  <option value="5y">Autres</option>
                  </select><br>
                  
                  <br>
                  <label for"addreq">Demmandes particulières :</label><br>
                  <textarea id="addreq" placeholder="Entrez ici vos demmandes"></textarea>
                  <br>
                  <button type="reset">Tout effacer</button><br><br>
                  
                  <br>
                  <div align="center"><button class="submit" type="submit">Confirmer</button></div>
                  </fieldset>


</body>
</html>
