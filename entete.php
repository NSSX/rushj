<?php session_start(); 
	if(!$_SESSION['panier'])
	{
		   // $_SESSION['panier']=array();
	}
	if(!$_SESSION['dest'])
	{
		$_SESSION['dest'] = "all";
	}
?>
<HTML>
<HEAD>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="design.css">
</HEAD>
<BODY>
<div class="top-header">
<TABLE>

			<TD style ="color:white">
				Call Us Today! Book now at +33 (0)7 86 97 00 48<span style="padding: 8px;">|</span><a style ="color:white; padding: 8px;" href="mailto:contact@travel4free.com">contact@travel4free.com</a>
			</TD>
			<TD>
				<div id="connexion">
				<?php
					if($_SESSION['login'])
					{
						echo'<a style ="color:white" href="logout.php">Log out</a><span style="padding: 10px; color: white;">|</span>';
					}
					else
					{
						echo'<a style ="color:white" href="connexion.php">Sign In</a><span style="padding: 10px; color: white;">|</span>';
					}
				?>
				</div>
				<div id="inscription">
				<?php
					if($_SESSION['login'])
					{
						echo'<a style ="color:white" href="accountmain.php">My account</a>';

					}
					else
					{
						echo'<a style ="color:white" href="inscription.php">Register</a>';
					}
				?>
			</div>
			</TD>
			<TD style ="color:white">
				<form role="search" id="searchform" method="get" action="#PANIER">
				Seek a destination: <input type="text" value="" name="s" id="s" />
											<input type="submit" value="OK" />
				</form>
			</TD>
</div>
</TABLE>
<div class="header">
<a style ="position: absolute; top: 0px;margin-left: 10px;" href="index.php">
		<img src="TFFlogo.png" style="height: 20vw; weight:20vw;" alt="logo" class="normal_logo">
		</a>
<CENTER>
<TABLE>
	<TR>

<TD>
<ul id="menu" style="margin-top: 10px";>
	<li><a href="index.php">Home</a></li>
	<li><a href="dest.php">Destination</a>
		<ul>
		  		<?php
         			if(file_exists("database/dest"))
					{
						$mytab= unserialize(file_get_contents("database/dest"));
						foreach($mytab as $elem)
						{
							$name = $elem['name'];	
							echo"<li><a href='dest.php?dest=$name'>$name</a></li>";
						}
					}
				?>
		</ul>
	</li>
	<li><a href="prod.php">Products</a>
		<ul>
			<li><a href="prod.php?cat=logement">Accommodation</a></li>
			<li><a href="prod.php?cat=transport">Transport</a></li>
			<li><a href="prod.php?cat=activi">Activities</a></li>			
		</ul>
	</li>
	<li><a href="panier.php">My Cart</a>
	</li>
	<?php 
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
		if($count === 1)
		{
		echo'<li><a href="main_admin_page.php">Admin Page</a>
		<ul>
			<li><a href="adminadd.php">Add Product</a>
			<li><a href="page_add_dest.php">Add Destination</a>
			<li><a href="del_dest.php">Delete Destination</a>
			<li><a href="modif.php">Custom product</a></li>
			<li><a href="admindel.php">Delete product</a></li>
			<li><a href="add_user.php">Add User</a></li>
			<li><a href="del_user.php">Remove User</a></li>
			<li><a href="give_right.php">Give Access</a></li>
			<li><a href="history.php">History</a></li>
		</ul>
	</li>';
		}
?>
</ul>
</TD>
</TR>
</TABLE>
</div>
</CENTER>
</div>
</body>
</html>