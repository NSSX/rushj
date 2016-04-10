<?php
	function actual($str)
	{
	$name = $_GET['name'];
		if(file_exists("database/element"))
		{
			$mytab= unserialize(file_get_contents("database/element"));
			foreach($mytab as $elem)
			{
				if($elem['name'] === $name)
				{
					return "$elem[$str]";
				}
			}
		
		}
	}
?>