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
        $class = $_POST['CLASS'];
        $spec = $_POST['SPEC'];
        $lab = $_POST['LAB'];
        $dep = $_POST['DEP'];
        update_doctorant($id, $id, $nom, $prenom, $email, $pass, $role, $spec, $lab, $dep, $class);
        header("Location: doctorants.php");
    }          
?>