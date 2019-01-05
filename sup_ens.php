<?php
    include "includes/connection.php";
    include "includes/functions.php";

if (isset($_GET['id'])) {
	$id=$_GET['id'];
	delete_enseignant($id);
    header('location: enseignants.php');
}          
?>