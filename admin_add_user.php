<?php
session_start();
	if(!$_POST['login'] || !$_POST['passwd'] || $_POST['submit'] != "OK")
	{
		header('location: add_user.php');
		exit;
	}
	else
	{
	$login = $_POST['login'];
	$passwd = $_POST['passwd'];
	$passwd = hash('whirlpool',$passwd);
	$tbl = array("login" => $login, "passwd" => $passwd, "acces" => "1");
		if(!file_exists("private"))
		{
			mkdir("private",0777);
			$mytab = array($tbl);
		}
		else
		{
			$mytab= unserialize(file_get_contents("private/passwd"));
			foreach($mytab as $elem)
			{
				if($elem['login'] === $login)
				{
					header('location: add_user.php');
					exit;
				}
			}
			$mytab []= $tbl;
		}
		$mytab = serialize($mytab);
		file_put_contents("private/passwd",$mytab);
		header('location: main_admin_page.php');
	}
?>