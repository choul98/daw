<?php

include "includes/header.php";
include "includes/connection.php";

?>
<form  method="post">
<input type="submit" value="proposé un sujet" name="submit">
<input type="submit" value="consulte profile" name="profil"> 
 <input type="submit" value="consulte les sujet" name="sujet">    
</form>
<?php
   $email=$_SESSION['email'];
    $sql = "SELECT * FROM USER, MEMBER, ENSEIGNANT WHERE USER.ID = MEMBER.ID AND MEMBER.ID = ENSEIGNANT.ID AND EMAIL= :email";
    $reponse = $bdd->prepare($sql);
    $reponse->bindValue(':email', $email);
    $reponse->execute();
    $donnees = $reponse->fetch();
    $_SESSION["ID"]=$donnees['ID'];
    
if(isset($_POST['submit'])){  
    if(($donnees['GRADE']=="MCA"||$donnees['GRADE']=="PROFESSEUR")&&($donnees['NBR_DOC']<6)){
                            header("Location: propsujet.php");
    }else{
        echo 'vous pouve pa propose un sujet';
    }
}elseif(isset($_POST['sujet'])){
    header("Location: sujet.php");
}

?>