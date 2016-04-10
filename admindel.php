<?php include "redirection.php"; admin_test(); ?>
<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<h1>Delete product</h1>
<fieldset id="contac">
<form id="form" action="del_database.php" method="POST">
        Remove this <BR />product: <input type="text" name="name" value=""/>
        <br />
        <input type="submit" name="submit" value="OK">
</form>
</div>
</BODY>
</HTML>