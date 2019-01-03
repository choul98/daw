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
	// $nomDoc = $_POST['nomDoc'];
    // $numDoc = $_POST['numDoc'];
	// $sql = "UPDATE doctorant SET nomDoc='$nomDoc' WHERE numDoc=$numDoc";
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