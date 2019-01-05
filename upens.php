<?php
include "includes/connection.php";
include "includes/functions.php";

if (isset($_POST['submit'])) {
    $id = $_POST['ID'];
    $nom = $_POST['NOM'];
    $prenom = $_POST['PRENOM'];
    $email = $_POST['EMAIL'];
    $pass = $_POST['PASS'];
    $role = $_POST['ROLE'];
    $spec = $_POST['SPEC'];
    $lab = $_POST['LAB'];
    $dep = $_POST['DEP'];
    $grade = $_POST['GRADE'];
    $nbr_doc = $_POST['NBR_DOC'];
    
    update_enseignant($id, $id, $nom, $prenom, $email, $pass, $role, $spec, $lab, $dep, $grade, $nbr_doc);
    header("Location: enseignants.php");
}          
?>