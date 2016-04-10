<?php include "redirection.php"; admin_test(); ?>
<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<h1>History</h1>
<fieldset id="contac">
<?php
		include "print_history.php";
		print_history();
?>
</div>
</BODY>
</HTML>