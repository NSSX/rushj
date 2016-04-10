<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<h1>Choose an other login</h1>
<div id="theform">
<div class ="formul">
<form id="form" action="inscr.php" method="POST">
<fieldset id="contac">
  <p id="civilite"><label>Title : </label>
    <input type="radio" name="title" value="Mr." />Mr.
    <input type="radio" name="title" value="Mrs" />Mrs.
  </p>
  <label>*Login : </label>
    <input type="text" name="login" size="30" /><br />
   <label>*Password : </label>
    <input type="password" name="passwd" size="30" /><br />
  <label> Address : </label>
    <input type="text" name="adress" size="30" /><br />
  <label> Postcode : </label>
    <input type="text" name="postcode" size="30" /><br />
  <label> City : </label>
    <input type="text" name="city" size="30" /><br />
  <label> Country : </label>
    <select name="pays">
      <option value="france">France</option>
      <option value="belgium">Belgium</option>
      <option value="switzerland">Switzerland</option>
    </select>
    <br />
     <br />
  <input type="submit" name="submit" value="OK" />
</form>
</div>
</div>
</BODY>
</HTML>