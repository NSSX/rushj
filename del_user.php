<?php include "redirection.php"; admin_test(); ?>
<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<h1>Delete USER</h1>
<fieldset id="contac">
<form id="form" action="admin_del_user.php" method="POST">
    <br />
        Identifiant: <input type="text" name="login" value=""/>
        <br />
        Mot de passe: <input type="password" name="passwd" value=""/>
        <br />
        <input type="submit" name="submit" value="OK">
</form>
</div>
</BODY>
</HTML>