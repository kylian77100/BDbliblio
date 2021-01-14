<!DOCTYPE html>
<html>

<?php
require "head.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        $first_name = $_POST["first_name"];
        $type = $_POST["type"];
        $mail = $_POST["mail"];
        $addreq = $_POST["addreq"];
        $why_contact = $_POST["why_contact"];
        $req=$why_contact;
        if($why_contact=="autre")
        {
			$req=$addreq;
		}
        echo "<div align='center' class='requete'>Bonjour <b>$first_name $name</b> votre requête pour: <i>".$req."</i> a bien été transmise aux responsables de <b>BDbliothèque</b>.</div>";
        $to = 'antoine.benoit@ecole-ipssi.net';
        
        $msg  = 'Bonjour,'."\r\n\r\n";
		$msg .= 'Ce mail a été envoyé depuis monsite.com par '.$firts_name.' '.$name."\r\n\r\n";
		$msg .= 'Voici le message qui vous est adressé :'."\r\n";
		$msg .= '***************************'."\r\n";
		$msg .= $addreq."\r\n";
		$msg .= '***************************'."\r\n";
		
		$headers = 'From: '.$first_name.$name.' <'.$mail.'>'."\r\n\r\n";
		mb_send_mail ($to, $why_contact, $msg , $headers, null );
		//mail($to, $why_contact, $msg, $headers);
        
     }
?>
</html>
