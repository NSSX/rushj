<?php include "redirection.php"; admin_test(); ?>
<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<h1>Create an user account</h1>
<div id="theform">

<div class ="formul">
<form id="form" action="admin_add_user.php" method="POST">
<fieldset id="contac">
  <p id="civilite"><label>Title : </label>
    <input type="radio" name="title" value="Mr." />Mr.
    <input type="radio" name="title" value="Mrs" />Mrs.
  </p>
  <label>*Name : </label>
    <input  type="text" name="login" size="30" /><br />
   <label>*Password : </label>
    <input type="password" name="passwd" size="30" /><br />
<br />
  <input type="submit" name="submit" value="OK" />
</form>
</div>
</div>
</BODY>
</HTML>