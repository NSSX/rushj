<?php include "redirection.php"; admin_test(); ?>
<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<h1>Delete destination</h1>
<fieldset id="contac">
<form id="form" action="the_del_dest.php" method="POST">
        Remove this <BR />destination: <input type="text" name="name" value=""/>
        <br />
        <input type="submit" name="submit" value="OK">
</form>
</div>
</BODY>
</HTML>