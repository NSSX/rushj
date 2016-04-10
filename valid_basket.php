<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<fieldset id="contac">
<form id="form" action="succes_basket.php" method="POST">
		<br />
		<br />
    	Are you sure you want to buy this product ? <br /> For a total of:<?php echo$_SESSION['price'];?> €
        <br />
        <input type="hidden"  name="price" value="<?php echo"$total";?>">
        <input type="submit"  name="submit" value="OK">
</form>

</div>
</BODY>
</HTML>