<?php 
	function ctr_connection_client($email, $password)
	{
		$request_client = 'SELECT mail_part FROM particuliers WHERE mail_part ="'.$email.'" AND pass = "'.$password.'"';
		
		if($result = mysql_query($request_client))
		{
			while($ligne = mysql_fetch_array($result))
			{
				$client = $ligne["mail_part"];
			}
			if(empty($client))
			{
				return false;
			}
			else
			{
				return true;
			}
		}
		else
		{
			echo "Problème dans ta requête";
			return false;
		}		
	}
?>