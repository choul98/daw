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

$sql = "SELECT * FROM doctorant WHERE numDoc = :id";
    $reponse = $bdd->prepare($sql);
    $reponse->bindValue(':id', $id);!
    $reponse->execute();

if (isset($_GET['id'])) {
  $donnees = $reponse->fetch();
    $_SESSION["numDoc"] = $donnees['numDoc'];

     ?>
<form method="post" action="updct.php" >

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