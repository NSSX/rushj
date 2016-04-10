<?php 
	function print_this_cata($cat)
	{
		if(file_exists("database/element"))
			{
				$mytab= unserialize(file_get_contents("database/element"));
				foreach($mytab as $elem)
				{
					if($elem['destination'] == $cat)
					{

						$link = $elem['link'];
						echo"<div class= 'dataelem'><img class = 'imgelem' SRC = $link></div";
					}
				}
			}

	}
 ?>