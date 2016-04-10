<?php
session_start();
	function print_dest()
	{
		if(!$_GET['dest'])
		{
			$_SESSION['dest'] = "all";
			if(file_exists("database/dest"))
			{
				$mytab= unserialize(file_get_contents("database/dest"));
				foreach($mytab as $elem)
				{
					$link = $elem['link'];
					echo"<div class= 'dataelem'><img class = 'imgelem' SRC = $link></div";
				}
			}
		}
		else
		{
			$_SESSION['dest'] = $_GET['dest'];
				if(file_exists("database/dest"))
				{
					$mytab= unserialize(file_get_contents("database/dest"));
					foreach($mytab as $elem)
					{
						if($elem['name'] === $_GET['dest'])
						{
							include "print_this_cata.php";
							print_this_cata($_GET['dest']);
						}
					}
				}

		}
	}
?>