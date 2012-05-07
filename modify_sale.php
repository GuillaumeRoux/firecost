<?php
	function modify_sale($vente_id, $name, $desc, $desc2, $price, $price_decr, $nb_decr, $date_start, $date_end, $hour_star, $hour_end, $nb, $rub, $ent)
	{
		$request_sale = "SELECT nom_article FROM ventes BY vente_id;";
		
		if($result = mysql_query($request_sale))
		{
			$sql = 'UPDATE ventes SET nom_article="'.$name.'", decription1="'.$desc.'", decription2="'.$desc2.'", prix="'.$price.'", prix_decr="'.$price_decr.'", nb_decr="'.$nb_decr.'", date_debut="'.$date_start.'", date_fin="'.$date_end.'", heure_debut="'.$hour_start.'", heure_fin="'.$hour_end.'", nb_article="'.$nb.'", rub_id="'.$rub.'", ent_id="'.$ent.'" WHERE vente_id="'.$vente_id.'";';
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