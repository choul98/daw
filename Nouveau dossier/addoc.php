<?php
try
{
   
    $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());

}

    
    $nom=$_POST['nomDoc'];
    $prenom=$_POST['prenomDoc'];
    $class=$_POST['class'];
    $spec=$_POST['spec'];
    $labo=$_POST['lab'];
    $depot=$_POST['dep'];
    $pass=$_POST['passDoc'];
    $email=$_POST['emailDoc'];
    
     $bdd->exec("insert into doctorant (nomDoc,prenomDoc,class,spec,lab,dep,passDoc,emailDoc) values ('$nom','$prenom','$class','$spec','$labo','$depot','$pass','$email')");
    echo 'bien';



?>
<html>
    <head>
        <link rel=stylesheet href="style1.css">

    </head>
    <body></body>
</html>