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

if (isset($_POST['submit'])) {
    $numDoc = $_SESSION["numDoc"];
    $class = $_POST['class'];
    $spec = $_POST['spec'];
    $lab = $_POST['lab'];
    $dep = $_POST['dep'];
	$sql = "UPDATE doctorant SET class='$class',spec='$spec',lab='$lab',dep='$dep' WHERE numDoc=$numDoc";

    $reponse = $bdd->prepare($sql);

    $reponse->execute();
     header('location: crud.php');
}          
?>