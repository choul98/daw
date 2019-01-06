<?php
session_start();
include "includes/connection.php";

$id = $_GET['id'];

$sql = "SELECT * FROM USER, MEMBER, DOCTORANT WHERE USER.ID = MEMBER.ID AND MEMBER.ID = DOCTORANT.ID AND ID = :id";
    $reponse = $bdd->prepare($sql);
    $reponse->bindValue(':id', $id);
    $reponse->execute();

if (isset($_GET['id'])) {
  $donnees = $reponse->fetch();
  echo $donnees;
  $_SESSION['USER_ID'] = $donnees['ID'];
?>
<form method="post" action="updct.php" >
<p>numero de doctorant</p>
<input 
  type="text" 
  name="numDoc"       
  value="<?php echo $donnees['USER'] ?>" >
<p>nom de doctorant</p>
<input 
  type="text"
       name="nomDoc"
  value="<?php echo $donnees['NOM'] ?>" >
<p>prenom de doctorant</p>
<input 
  type="text"
       name="prenomDoc"
  value="<?php echo $donnees['PRENOM'] ?>" >
<p>classment de doctorant</p>
<input 
  type="text"  
       name="class"
  value="<?php echo $donnees['class'] ?>" >
<p>specialité de doctorant</p>
<input 
  type="text"  
       name="spec"
  value="<?php echo $donnees['spec'] ?>" >
<p>Laboratoire de doctorant</p>
<input 
  type="text" 
       name="lab"
  value="<?php echo $donnees['lab'] ?>" >
<p>departement de doctorant</p>
<input 
  type="text"  
       name="dep"
  value="<?php echo $donnees['dep'] ?>" >

 <input type="submit" name="submit" value="Submit">
</form>


<?php
        
  
} else {
    echo "Something went wrong!";
    exit;
}

?>