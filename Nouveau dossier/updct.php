<?php
try
{
   
    $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());

}

if (isset($_POST['submit'])) {
	$nomDoc = $_POST['nomDoc'];
    $numDoc = $_POST['numDoc'];
	$sql = "UPDATE doctorant SET nomDoc='$nomDoc' WHERE numDoc=$numDoc";

    $reponse = $bdd->prepare($sql);

    $reponse->execute();
     header('location: crud.php');
}          
?>