<?php
session_start();
include "includes/connection.php";

$id = $_GET['id'];
$sql = "SELECT * FROM USER, MEMBER, ENSEIGNANT WHERE USER.ID = MEMBER.ID AND MEMBER.ID = ENSEIGNANT.ID AND ID = :id";

    $reponse = $bdd->prepare($sql);
    $reponse->bindValue(':id', $id);!
    $reponse->execute();
if (isset($_GET['id'])) {
  $donnees = $reponse->fetch();
    $_SESSION["USER_ID"] = $donnees['ID'];
     ?>
<form method="post" action="upens.php" >

<p>grade de enseignant</p>
<input 
  type="text"  
       name="grade"
  value="<?php echo $donnees['GRADE'] ?>" >
<p>specialité de enseignant</p>
<input 
  type="text"  
       name="spec"
  value="<?php echo $donnees['SPEC'] ?>" >
<p>Laboratoire de enseignant</p>
<input 
  type="text" 
       name="lab"
  value="<?php echo $donnees['LAB'] ?>" >
<p>departement de enseignant</p>
<input 
  type="text"  
       name="dep"
  value="<?php echo $donnees['DEP'] ?>" >
    <p>le nombre des doctorants</p>
<input 
  type="text"  
       name="dep"
  value="<?php echo $donnees['NBR_DOC'] ?>" >

 <input type="submit" name="submit" value="Submit">
</form>


<?php
        
  
} else {
    echo "Something went wrong!";
    exit;
}
?> 