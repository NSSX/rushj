<?php
session_start();
	if(!$_POST['login'] || !$_POST['passwd'] || $_POST['submit'] != "OK")
	{
		header('location: inscription2.php');
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
					header('location: inscription2.php');
					exit;
				}
			}
			$mytab []= $tbl;
		}
		$mytab = serialize($mytab);
		file_put_contents("private/passwd",$mytab);
		if($login === "admin" && $passwd === hash('whirlpool',"admin"))
		{
			$_SESSION['login'] = $login;
			header('location: main_admin_page.php');
		}
		else
		{
			$_SESSION['login'] = $login;
			header('location: index.php');
		}
	}
?>