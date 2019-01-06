<?php
include "includes/header.php";
include "includes/connection.php";
 include "includes/functions.php";
session_start();

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
    $des  = $_POST['titre'];
    $motcle = "motcle";
    echo $_POST['des'];
    $id_e = $_SESSION["ID"];
    $bdd->exec("insert into sujet (	DESCRIPTION,MOTCLE,ID_E) values ('$des','$motcle','$id_e')");
}

?>