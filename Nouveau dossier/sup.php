<?php
try
{
   
    $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());

}

if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$sql = "DELETE FROM doctorant WHERE numDoc = :id";

    $reponse = $bdd->prepare($sql);
    $reponse->bindValue(':id', $id);
    $reponse->execute();
    header('location: crud.php');
}          
?>