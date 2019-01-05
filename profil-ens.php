<?php
  include "includes/header.php";
    include "includes/connection.php";
$id = $_SESSION["ID"];
$sql = "SELECT * FROM USER, MEMBER, ENSEIGNANT WHERE USER.ID = MEMBER.ID AND MEMBER.ID = ENSEIGNANT.ID AND ID = :id";

    $reponse = $bdd->prepare($sql);
    $reponse->bindValue(':id', $id);!
    $reponse->execute();

        echo $donnees['nom']; 
        echo $donnees['prenom']; 
        echo $donnees['grade'];
        echo $donnees['spec'];
        echo $donnees['lab'];
        echo $donnees['dep'];
        echo $donnees['email'];
        echo $donnees['nbr_doc']; 
?>
<form method="post" action="up-prof.php">
    <input type="submit" value="modifier" name="profens">
</form>g
