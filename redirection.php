<?php
session_start();

function admin_test()
{
	/*if($_SESSION['login'] !== "admin")
		{
			header('location: index.php');
		}*/
		$count = 0;
	if(file_exists("private/passwd"))
		{
			$mytab= unserialize(file_get_contents("private/passwd"));
			$i = 0;
			foreach($mytab as $elem)
			{
				if($elem['login'] === $_SESSION['login'])
				{
					if($mytab[$i]['acces'] === "5" || $_SESSION['login'] === "admin")
					{
						$count = 1;
						break;
					}
				}
				$i++;
			}

		}
	if($count == 0)
		header('location: index.php');
}
?>