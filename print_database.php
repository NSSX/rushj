<?php
	function my_print_database()
	{
		if(file_exists("database/element"))
		{
			$mytab= unserialize(file_get_contents("database/element"));
			foreach($mytab as $elem)
			{
				$link = $elem['link'];
				$des = $elem['description'];
				$price = $elem['price'];
				echo"<div class= 'dataelem'><img class = 'imgelem' SRC = $link><span id='txt'>$des</span><span id='priceux'>Price: <br />$price €</span><div><form id ='basket_form' action='add_panier.php' method='POST'>
        <input type='hidden' name='name' value = '".$elem['name']."'>
        <input id='sub' type='submit' name='submit' value='+'>
		</form></div></div>";
			}
		}
	}
?>