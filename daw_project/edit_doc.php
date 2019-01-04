<?php
session_start();
include "includes/header.php";

$id = $_GET['id'];

$sql = "SELECT * FROM DOCTORANT, MEMBER, USER WHERE USER.ID = MEMBER.ID AND DOCTORANT.ID = MEMBER.ID AND USER.ID = :id";
    $reponse = $bdd->prepare($sql);
    $reponse->bindValue(':id', $id);
    $reponse->execute();

if (isset($_GET['id'])) {
  $donnees = $reponse->fetch();
  if(!$donnees) {
    echo "Nothing.";
  }
  $_SESSION['USER_ID'] = $donnees['ID'];
?>
<form method="post" action="updct.php" >
<p>numero de doctorant</p>
<input 
  type="text" 
  name="numDoc"       
  value="<?php echo $donnees['ID'] ?>" >
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
  value="<?php echo $donnees['CLASS'] ?>" >
<p>specialité de doctorant</p>
<input 
  type="text"  
       name="spec"
  value="<?php echo $donnees['SPEC'] ?>" >
<p>Laboratoire de doctorant</p>
<input 
  type="text" 
       name="lab"
  value="<?php echo $donnees['LAB'] ?>" >
<p>departement de doctorant</p>
<input 
  type="text"  
       name="dep"
  value="<?php echo $donnees['DEP'] ?>" >
<br>

 <input class="btn btn-success" type="submit" name="submit" value="Submit">
</form>


<?php
        
  
} else {
    echo "Something went wrong!";
    exit;
}

?>