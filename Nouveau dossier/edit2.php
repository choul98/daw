<?php
session_start();
try
{
   
    $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());

}
$id = $_GET['id'];

$sql = "SELECT * FROM enseignant WHERE numEns = :id";
    $reponse = $bdd->prepare($sql);
    $reponse->bindValue(':id', $id);!
    $reponse->execute();

if (isset($_GET['id'])) {
  $donnees = $reponse->fetch();
    $_SESSION["numEns"] = $donnees['numEns'];

     ?>
<form method="post" action="upens.php" >

<p>grade de enseignant</p>
<input 
  type="text"  
       name="grade"
  value="<?php echo $donnees['grade'] ?>" >
<p>specialité de enseignant</p>
<input 
  type="text"  
       name="spec"
  value="<?php echo $donnees['spec'] ?>" >
<p>Laboratoire de enseignant</p>
<input 
  type="text" 
       name="lab"
  value="<?php echo $donnees['lab'] ?>" >
<p>departement de enseignant</p>
<input 
  type="text"  
       name="dep"
  value="<?php echo $donnees['dep'] ?>" >
    <p>le nombre des doctorants</p>
<input 
  type="text"  
       name="dep"
  value="<?php echo $donnees['nbrDoc'] ?>" >

 <input type="submit" name="submit" value="Submit">
</form>


<?php
        
  
} else {
    echo "Something went wrong!";
    exit;
}

?>