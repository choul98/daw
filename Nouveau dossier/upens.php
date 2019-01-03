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
    $numEns = $_SESSION["numEns"];
    $grade = $_POST['grede'];
    $spec = $_POST['spec'];
    $lab = $_POST['lab'];
    $dep = $_POST['dep'];
    $nbrDoc = $_POST['nbrDoc'];
	$sql = "UPDATE enseignant SET grade='$grade',spec='$spec',lab='$lab',dep='$dep',nbrDoc='$nbrDoc' WHERE numEns=$numEns";

    $reponse = $bdd->prepare($sql);

    $reponse->execute();
     header('location: crud2.php');
}          
?>