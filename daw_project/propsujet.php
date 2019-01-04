<?php
include "includes/header.php";
include "includes/connection.php";
 include "includes/functions.php";


?>
<form method="post" >
    <p>le titre de votre sujet</p>
    <input type="text" name="titre" >
    <p>les mts cle de sujet</p>
<textarea rows="4" cols="50" name="motcle" ></textarea>
    <p>description de sujet</p>
<textarea rows="4" cols="50" name="des" ></textarea><br>
    <input type="submit" value="proposé" name="submit">
</form>
<?php

if(isset($_POST['submit'])){
    $titre  = $_POST['titre'];
    $motcle = $_POST['motcle'];
    $des = $_POST['des'];
    $id_e = $_SESSION["ID"];
    $bdd->exec("insert into sujet (	DESCRIPTION,MOTCLE,ID_E,titre) values ('$des','$motcle','$id_e','$titre')");
}

?>