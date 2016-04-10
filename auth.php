<?php
	function auth($login, $passwd)
	{
		if(!file_exists("private/passwd"))
		{
			return(FALSE);	
		}
		else
		{
			$mytab= unserialize(file_get_contents("private/passwd"));
			$passwd = hash('whirlpool',$passwd);
			foreach($mytab as $elem)
			{
				if($elem['login'] === $login && $elem['passwd'] === $passwd)
				{				
					return(TRUE);
				}
			}
		}
		return (FALSE);
	}
?>