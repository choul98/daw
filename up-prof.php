<?php
include "includes/connection.php";

$id = $_SESSION["ID"];
$sql = "SELECT * FROM USER, MEMBER, ENSEIGNANT WHERE USER.ID = MEMBER.ID AND MEMBER.ID = ENSEIGNANT.ID AND ID = :id";

    $reponse = $bdd->prepare($sql);
    $reponse->bindValue(':id', $id);!
    $reponse->execute();
    $donnees = $reponse->fetch();
    $_SESSION["USER_ID"] = $donnees['ID'];
     ?>
<form method="post" action="upens.php" >
<p>Votre nom</p>
<input 
  type="text"  
       name="nom"
  value="<?php echo $donnees['NOM'] ?>" >
    <p>Votre prenom</p>
<input 
  type="text"  
       name="prenom"
  value="<?php echo $donnees['PRENOM'] ?>" >

<p>Votre specialité </p>
<input 
  type="text"  
       name="spec"
  value="<?php echo $donnees['SPEC'] ?>" >
<p>Laboratoire</p>
<input 
  type="text" 
       name="lab"
  value="<?php echo $donnees['LAB'] ?>" >
<p>Votre departement </p>
<input 
  type="text"  
       name="dep"
  value="<?php echo $donnees['DEP'] ?>" >
 <input type="submit" name="submit" value="Submit">
</form>


<?php
        
  
} else {
    echo "Something went wrong!";
    exit;
}
?> 