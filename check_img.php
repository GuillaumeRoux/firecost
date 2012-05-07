<?php
	list($width, $height, $type, $attr) = getimagesize("URL");
	echo "$type $attr <br/>";
	if($type != 2 && $type != 3)
	{
		$verif=1;
		return false;
	}
	else if($type == 2 || 3)
	{
		if(($width < 100 || $width > 300) && ($height < 100 || $height > 300))
		{
			$verif=2;
			return false;
		}
		else if(($width >= 100 && $width <= 300) && ($height >= 100 && $height <= 300))
		{
			$verif=0;
			return true;
		}
	}
	else
	{
		$verif=3;
		return false;
	}
?>