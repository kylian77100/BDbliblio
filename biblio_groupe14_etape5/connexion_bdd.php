<?phprequire "config.php";    $link=mysqli_connect($CONFIG['dbhost'],$CONFIG['dbuser'],$CONFIG['dbpwd'],$CONFIG['dbname']);    if(!$link)    {        echo "Erreur : Impossible de se connecter � MySQL." . PHP_EOL;        echo "Errno de d�bogage : " . mysqli_connect_errno() . PHP_EOL;        echo "Erreur de d�bogage : " . mysqli_connect_error() . PHP_EOL;        exit;    }    //echo "Succ�s : Une connexion correcte � MySQL a �t� faite! La base de donn�e biblioth�que est g�niale."."<br>";?>