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


if(isset($_SESSION['ID'])) {
    $id = $_SESSION['ID'];
    $result = $bdd->query("SELECT * FROM USER WHERE ID = '$id'");
    $data = $result->fetch();
}

?>