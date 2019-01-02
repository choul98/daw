<?php
try
{
   
    $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());

}

    
    $nom=$_POST['nomEns'];
    $prenom=$_POST['prenomEns'];
    $grade=$_POST['grade'];
    $spec=$_POST['spec'];
    $labo=$_POST['lab'];
    $depot=$_POST['dep'];
    $pass=$_POST['passEns'];
    $email=$_POST['emailEns'];
    $nbr=$_POST['nbrDoc'];
    
     $bdd->exec("insert into enseignant(nomEns,prenomEns,grade,spec,lab,dep,passEns,emailEns,nbrDoc) values ('$nom','$prenom','$grade','$spec','$labo','$depot','$pass','$email','$nbr')");
    
   echo 'bien';



?>
<html>
    <head>
        <link rel=stylesheet href="style1.css">

    </head>
    <body></body>
</html>