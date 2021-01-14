<!DOCTYPE html>
<html>

<?php
require "head.php";
?>

<br><br><br>
<?php
    require "connexion_bdd.php"
?>
<div class="grille">


    <?php
        $res = $link->query("SELECT titre,isbn FROM Livre");
        if($res)
        {
            while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
            {
                echo "<div align='center'>";
                echo "<h3><a href='".$row["isbn"].".php?isbn=".$row["isbn"]."'><b>".$row["titre"]."</b></a></h3>";
                echo "<a href='".$row["isbn"].".php'><img src='img/".$row["isbn"].".jpg' height='552,9' width='420'></a>";
                echo "</div>";
            }
        }
    ?>

	
	



</div>

<br><br><br>
</body>
</html>
