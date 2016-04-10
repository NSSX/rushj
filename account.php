<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
PAGE ACCOUNT
<form id="form" action="modifpass.php" method="POST">
        Identifiant: <input type="text" name="login" value=""/>
        <br />
        Ancien mot de passe: <input type="password" name="oldpw" value=""/>
        <br />
        Nouveau mot de passe: <input type="password" name="newpw" value=""/>
        <br />
        <input type="submit" name="submit" value="OK">
</form>
</div>
</BODY>
</HTML>