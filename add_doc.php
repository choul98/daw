<?php
    ob_start();
    include "includes/header.php";
    include "includes/functions.php";
    
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $class=$_POST['class'];
    $spec=$_POST['spec'];
    $lab=$_POST['lab'];
    $dep=$_POST['dep'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    # D for doctorant
    $role = 'D';
    
    if(isset_doctorant($nom, $prenom, $email, $pass, $role, $spec, $lab, $dep, $class)) {
        insert_doctorant($nom, $prenom, $email, $pass, $role, $spec, $lab, $dep, $class);
        
        header("Location: doctorants.php");
    }
?>
