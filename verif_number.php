<?php

function verif_number($number)
 {
	$nbLettre = strlen($number);
	for ($i=1; $i<$nbLettre; $i++) 
	{
		$verif = false;
		for ($j=0; $j<10; $j++) 
		{
			$j = (string)$j;
			if ($number[$i] == $j) $verif = true;
		}
		if (!$verif) return false;
	}
	return true;
}

?>