<?php
session_start();
include "includes/connection.php";

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