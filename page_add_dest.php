<?php include "redirection.php"; admin_test(); ?>
<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<h1>Add Destination</h1>
<fieldset id="contac">
<form id="form" action="add_dest.php" method="POST">
        Name of desitnation: <input type="text" name="name" value=""/>
        <br />
        Image link <input type="text" name="link" value=""/>
        <br />
        <input type="submit" name="submit" value="OK">
</form>
</div>
</BODY>
</HTML>