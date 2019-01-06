<?php
include "includes/connection.php";
$c=1;

    $reponse = $bdd->query('SELECT * FROM USER,SUJET WHERE USER.ID = SUJET.ID_E');

 while ($donnees = $reponse->fetch()){
     echo "sujet" . $c.'<br>';
     echo "titre" . $donnees['titre'].'<br>';
     echo "descrptios : " . $donnees['DESCRIPTION'].'<br>';
     echo "les mot clé : " . $donnees['MOTCLE'].'<br>';
     echo "propose par " . $donnees['NOM'].'<br>';
 
     $c++; 
?>
<a href="sujets.php?ida=<?php echo $donnees['ID']; ?>">accepte</a>
<a href="sujets.php?idr=<?php echo $donnees['ID']; ?>">refe</a>
<br>
<?php
         echo "--------------------------------------------------------".'<br>';
     echo "--------------------------------------------------------".'<br>';
     }
     if(isset($_GET['ida'])){
         $id=$_GET['ida'];
         $STATUS="ACCEPTED";
        $sql = "UPDATE SUJET SET STATUS='$STATUS' WHERE ID = '$id'";
        $reponse = $bdd->prepare($sql);
        $reponse->execute();
     }elseif(isset($_GET['idr'])){
         $id=$_GET['idr'];
         $sql = "DELETE FROM SUJET WHERE ID = '$id'";
        $reponse = $bdd->prepare($sql);
        $reponse->execute();
     }

 
     ?>
