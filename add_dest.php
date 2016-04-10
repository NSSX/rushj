<?php
	if(!$_POST['name'] || !$_POST['link'] ||$_POST['submit'] != "OK")
	{
		echo"ERROR\n";
	}
	else
	{
	$name = $_POST['name'];
	$link = $_POST['link'];
	$tbl = array("name" => $name , "link" => $link);
		if(!file_exists("database"))
		{
			mkdir("database",0777);
			$mytab = array($tbl);
		}
		else
		{
			$mytab= unserialize(file_get_contents("database/dest"));
			foreach($mytab as $elem)
			{
				if($elem['name'] === $name)
				{
					echo"ERROR";
					exit;
				}
			}
			$mytab []= $tbl;
		}
		$mytab = serialize($mytab);
		file_put_contents("database/dest",$mytab);
		echo"OK\n";
	}
?>