<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<?php
	include "print_prod.php";
include"print_database.php";
	if($_SESSION['dest']==="all" && !$_GET)
		my_print_database();
	else
		print_prod();
?>
</div>
</body>
</html>