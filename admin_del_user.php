<?php
	if(!$_POST['login'] || !$_POST['passwd'] || $_POST['submit'] != "OK")
	{
		header('location: del_user.php');
	}
	else
	{
	$login = $_POST['login'];
	$passwd = $_POST['passwd'];
	$passwd = hash('whirlpool', $passwd);
		if(file_exists("private/passwd"))
		{
			$mytab= unserialize(file_get_contents("private/passwd"));
			$i = 0;
			foreach($mytab as $elem)
			{
				if($elem['login'] === $login && $elem['passwd'] === $passwd)
				{
					unset($mytab[$i]);
					$mytab = array_merge(array(),$mytab);
					$mytab = serialize($mytab);
					file_put_contents("private/passwd",$mytab);
					header('location: main_admin_page.php');
					exit;
				}
				$i++;
			}
		
		}
	}
	header('location: del_user.php');
?>