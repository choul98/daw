<?php
include "includes/connection.php";
session_start();
$c=1;

    $reponse = $bdd->query('SELECT * FROM USER,SUJET WHERE USER.ID = SUJET.ID_E');

 while ($donnees = $reponse->fetch()){
     echo "sujet" . $c.'<br>';
     echo "titre" . $donnees['titre'].'<br>';
     echo "descrptios : " . $donnees['DESCRIPTION'].'<br>';
     echo "les mot clé : " . $donnees['MOTCLE'].'<br>';
     echo "propose par " . $donnees['NOM'].'<br>';
 
     $c++; 
 }
$i=0;
$b="FALSE";
$id = $_SESSION["ID"];
$class = $_SESSION["CLASS"];
echo 'entre le titre de sujet '.'<br>';
while ($i < $class) {
    $class = $_SESSION["CLASS"];
    echo 'le ' . $i . 'choix   ';
    isset($_POST['submit'])->$b;
     ?>
<form method="post">
<input  type="text" name="sujet"><br>
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])=="TRUE"){
    $i++;
}else{
    $class=0;
}


}

?>
