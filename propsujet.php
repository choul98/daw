<?php
include "includes/header.php";
include "includes/sidebar.php";
include "includes/functions.php";

// style this and you're good to go
// too lazy to style
// really sorry.
// good luck

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
    insert_sujet($des, $motcle, $id_e, null, null, $titre);
    header("Location: sujets.php");
}

?>