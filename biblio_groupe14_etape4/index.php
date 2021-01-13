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
                echo "<h3><a href='".$row["isbn"].".php'><b>".$row["titre"]."</b></a></h3>";
                echo "<a href='".$row["isbn"].".php'><img src='img/".row["isbn"].".jpg' height='552,9' width='420'></a>";
                echo "</div>";
            }
        }
    ?>

	
	<div align="center">
	<h3><a href="9782012101388.php"><b>Astérix et Cléopâtre</b></a><h3>
	<a href="9782012101388.php"><img src="img/9782012101388.jpg" height="552,9" width="420"></a>
	</div>
	
	<div align="center">
	 <h3><a href="2012101399.php"><b>Le Combat des Chefs</b></a></h3>
	 <a href="2012101399.php"><img src="img/2012101399.jpg" height="552,9" width="420"></a>
	</div>
	
	
	<div align="center">
	 <h3><a href="2012101488.php"><b>Astérix chez les Helvètes</b></a></h3>
	  <a href="2012101526.php"><img src="img/2012101488.jpg" height="552,9" width="420"></a>
	</div>
	
	
	<div align="center">
	<h3><a href="2012101526.php">Astérix en Corse</a></h3>
	 <a href="2012101526.php"><img src="img/2012101526.jpg" height="552,9" width="420"></a>
	</div>
	
	
	<div align="center">
	<h3><a href="2205009214.php">Obélix et compagnie</a></h3>
	 <a href="2205009214.php"><img src="img/2205009214.jpg" height="552,9" width="420"></a>
	</div>
	
	
	<div align="center">
	<h3><a href="9782800101583.php">Les rivaux de Painful Gulch</a></h3>
	 <a href="9782800101583.php"><img src="img/9782800101583.jpg" height="552,9" width="420"></a>
	</div>
	
	
	<div align="center">
	<h3><a href="9067930709.php">Le 20ème de Cavalerie</a></h3>
	 <a href="9067930709.php"><img src="img/9067930709.jpg" height="552,9" width="420"></a>
	</div>
	
	
	<div align="center">
	<h3><a href="9782205003055.php">Le Pied-Tendre</a></h3>
	 <a href="9782205003055.php"><img src="img/9782205003055.jpg" height="552,9" width="420"></a>
	</div>
	
	
	<div align="center">
	<h3><a href="2205006045.php">Chasseur de Primes</a></h3>
	 <a href="2205006045.php"><img src="img/2205006045.jpg" height="552,9" width="420"></a>
	</div>
	
	
	<div align="center">
	<h3><a href="2205005855.php">Ma Dalton</a></h3>
	 <a href="2205005855.php"><img src="img/2205005855.jpg" height="552,9" width="420"></a>
	</div>


<?php
//    require "deconnexion_bdd.php"
?>


</div>

<br><br><br>
</body>
</html>
