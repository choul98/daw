<?php
    include "includes/connection.php";
    include "includes/functions.php";
    
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $grade=$_POST['grade'];
    $spec=$_POST['spec'];
    $labo=$_POST['lab'];
    $depot=$_POST['dep'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $nbr_doc=$_POST['nbr_doc'];
    # 'E' for enseignant
    $role = 'E'; 
    
    if(isset($nom, $prenom, $email, $role, $spec, $lab, $dep, $grade, $nbr_doc)) {
        insert_enseignant($nom, $prenom, $email, $role, $spec, $lab, $dep, $grade, $nbr_doc);
    }

?>
<html>
    <head>
        <link rel=stylesheet href="style1.css">

    </head>
    <body></body>
</html>