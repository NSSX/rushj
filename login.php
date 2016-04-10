<?php
session_start();
 foreach($_GET as $key => $elem)
{
	if($key == "login")
	{
		$login = $elem;
		$_SESSION["login"] = $login;
	}
	else if($key == "passwd")
	{
		$passwd = $elem;
		$_SESSION["passwd"] = $passwd;
	}
}

	include "auth.php";

	if(auth($login, $passwd) == TRUE)
	{
		if($_SESSION['login'] === "admin")
		{
			header('location: main_admin_page.php');
		}
		else
		{
			header('location: index.php');
		}
	}
	else
	{
		$_SESSION['loggued_on_user'] = "";
		header('location: connexion2.php');
	}
?>