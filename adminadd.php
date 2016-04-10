<?php include "redirection.php"; admin_test(); ?>
<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<h1>Add Product</h1>
<fieldset id="contac">
<form id="form" action="ajoutelem.php" method="POST">
        NOM DU PRODUIT: <input type="text" name="name" value=""/>
        <br />
        PRIX DU PRODUIT: <input type="text" name="price" value=""/>
  
 		 <br />
        LIEN DE L'IMAGE DU PRODUIT: <input type="text" name="link" value=""/>
        <br />
        DESCRIPTION DU PRODUIT: <input type="text" name="description" value=""/>
        <br />
        Destination associer : 
         <select name="dest">
         		<option value="all" selected>All</option>
         		<?php
         			if(file_exists("database/dest"))
					{
						$mytab= unserialize(file_get_contents("database/dest"));
						foreach($mytab as $elem)
						{
							$name = $elem['name'];
							echo"<option value='$name'>$name</option>";
						}
					}
				?>
 		 </select>
      <br />
        Categorie associer : 
         <select name="cat">
                <option value="all" selected>All</option>
                <option value="logement">Accommodation</option>
                <option value="transport">Transport</option>
                <option value="activi">Activities</option>       
         </select>
    <br />
    <br />
        <input type="submit" name="submit" value="OK">
</form>
</div>
</BODY>
</HTML>