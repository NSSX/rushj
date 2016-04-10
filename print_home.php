<?php
	function print_home()
	{
		if(file_exists("database/element"))
		{
			$mytab= unserialize(file_get_contents("database/element"));
			foreach($mytab as $elem)
			{
				$link = $elem['link'];
			echo"<img id ='homeimg' SRC = $link>";
			
			}
		}
	}
?>