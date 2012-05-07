<?php
	function modify_client($part_id, $nom, $prenom, $adresse, $adresse2, $code, $ville, $etat, $pays, $date, $mail, $pass)
	{
		$request_sale = "SELECT nom_article FROM ventes BY vente_id;";
		
		if($result = mysql_query($request_sale))
		{
			$sql = 'UPDATE ventes SET nom_part="'.$nom.'", prenom="'.$prenom.'", adresse_part1="'.$adresse.'", adresse_part2="'.$adresse2.'", postal_part="'.$code.'", ville_part="'.$ville.'", etat_part="'.$etat.'", pays_part="'.$pays.'", dtnaiss="'.$date.'", mail_part="'.$mail.'", pass_part="'.$pass.'" WHERE vente_id="'.$part_id.'";';
			$result2 = mysql_query($sql);
			return true;
		}
		else
		{
			echo "Problème dans ta requête";
			return false;
		}
	}
?>