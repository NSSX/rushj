<?php
	if(!$_POST['name'] || $_POST['submit'] != "OK")
	{
		echo"ERROR\n";
	}
	else
	{
	$name = $_POST['name'];
		if(file_exists("private/passwd"))
		{
			$mytab= unserialize(file_get_contents("private/passwd"));
			$i = 0;
			foreach($mytab as $elem)
			{
				if($elem['login'] === $name)
				{
					$mytab[$i]['acces'] = "5";
					$mytab = serialize($mytab);
					file_put_contents("private/passwd",$mytab);
					header('location: index.php');
					exit;
				}
				$i++;
			}
		
		}
	}
	echo"ERROR\n";
?>