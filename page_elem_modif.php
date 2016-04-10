<?php include "redirection.php"; admin_test(); ?>
<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<h1>Custom product</h1>
<fieldset id="contac">
<form id="form" action="modif_focus.php" method="POST">
        <?php include 'actual_elem.php'; ?>
  		Name: <input type="text" name="actual" value= "<?php echo actual('name'); ?>"/>
        <br />
        <br />
        New Name: <input type="text" name="name" value= "<?php echo actual('name'); ?>"/>
        <br />
        <br />
         PRIX: <input type="text" name="price" value= "<?php echo actual('price'); ?>"/>
        <br />
        <br />
        <img id='small' SRC = "<?php echo actual('link'); ?>">
       <br />
        <br />
        IMG LINK: <input type="text" name="link" value= "<?php echo actual('link'); ?>"/>
        <br />
        <br />
        DESCRIPTION: <input type="text" name="description" value= "<?php echo actual('description'); ?>"/>
        <br />
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
         Categorie associer:
              <select name="cat">
                <option value="all" selected>All</option>
                <option value="logement">Accommodation</option>
                <option value="transport">Transport</option>
                <option value="activi">Activities</option>       
         </select>
         <br />
        <input type="submit" name="submit" value="OK">
</form>
</div>
</BODY>
</HTML>