     
<?php
try
{
   
    $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());

}

$reponse = $bdd->query('SELECT * FROM enseignant');
?>
<table border="2">
  <thead>
    <tr>
      <th>#</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Grade</th>      
      <th>specialite</th>
      <th>Laboratoire</th>
      <th>departement</th>
      <th>Email</th>
      <th>Modifier</th>
      <th>Supprime</th>
      <th>nombre des doctorants</th>

    </tr>
      </thead>
   <tbody>
 <?php
while ($donnees = $reponse->fetch()) 
{
?>
     <tr>
        <td><?php echo $donnees['numEns']; ?></td>
        <td><?php echo $donnees['nomEns']; ?></td>
        <td><?php echo $donnees['prenomEns']; ?></td>
        <td><?php echo $donnees['grade']; ?></td>
        <td><?php echo $donnees['spec']; ?></td>
        <td><?php echo $donnees['lab']; ?></td>
        <td><?php echo $donnees['dep']; ?> </td>
         <td><?php echo $donnees['emailEns']; ?> </td>
          <td><?php echo $donnees['nbrDoc']; ?> </td>
         <td><a href="edit2.php?id=<?php echo $donnees['numEns']; ?>">Edit</a></td>
         <td><a href="sup2.php?id=<?php echo $donnees['numEns']; ?>">supprime</a></td>
      </tr>
       
       <?php

}?>
       <br>
    </tbody>
</table>

<?php
$reponse->closeCursor(); 
?>