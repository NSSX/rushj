<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<h1>Your Cart</h1>
<fieldset id="contac">
<a href = "del_panier.php">DELETE BASKET</a>
<?php
		include "print_panier.php";
		print_panier();
?>
<br />
<CENTER>
<a href = "valid_basket.php"><img SRC= "https://ma-bureautique.com/Public/Images/site/valider-ma-commande.jpg"></a>
</CENTER>
</div>
</BODY>
</HTML>