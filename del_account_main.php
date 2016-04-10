<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
PAGE ACCOUNT
<form id="form" action="del_account.php" method="POST">
        Vous ete sur le point de supprimer <br /> votre compte!!!!!!<br /><br />
        Identifiant: <input type="text" name="login" value=""/>
        <br />
        Mot de passe: <input type="password" name="passwd" value=""/>
        <br />
        <input type="submit" name="submit" value="OK">
</form>
</div>
</BODY>
</HTML>