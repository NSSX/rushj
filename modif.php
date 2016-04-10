<?php include "redirection.php"; admin_test(); ?>
<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<h1>Custom product</h1>
<fieldset id="contac">
<form id="form" action="adminmodif.php" method="POST">
        Enter product's name<br /> you want to modify: <input type="text" name="name" value=""/>
        <br />
        <input type="submit" name="submit" value="OK">
</form>
</div>
</BODY>
</HTML>