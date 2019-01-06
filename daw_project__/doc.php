<?php
session_start();
include "includes/header.php";
include "includes/connection.php";

?>
<form  method="post">
<input type="submit" value="consulte profile" name="profil"> 
 <input type="submit" value="consulte-les-sujet" name="sujet">    
</form>
<?php
   $email=$_SESSION['email'];
    $sql = "SELECT * FROM USER, MEMBER, DOCTORANT WHERE USER.ID = MEMBER.ID AND MEMBER.ID = DOCTORANT.ID AND EMAIL= :email";
    $reponse = $bdd->prepare($sql);
    $reponse->bindValue(':email', $email);
    $reponse->execute();
    $donnees = $reponse->fetch();
    $_SESSION["ID"]=$donnees['ID'];
    $_SESSION["CLASS"] = $donnees['CLASS'];
if(isset($_POST)){
if($_POST['submit']="consulte-les-sujet"){  
    header("Location: ch-sujet.php");
    }
}

?>