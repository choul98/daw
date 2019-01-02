     
<?php
try
{
   
    $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());

}
$c=1;
$reponse = $bdd->query('SELECT * FROM doctorant');
?>
<table border="2">
  <thead>
    <tr>
      <th>#</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Classment</th>
      <th>specialite</th>
      <th>Laboratoire</th>
      <th>departement</th>
        <th>Email</th>
        <th>Modifier</th>
        <th>Supprime</th>
    </tr>
      </thead>
   <tbody>
 <?php
while ($donnees = $reponse->fetch()) 
{
?>
     <tr>
        <td><?php echo $donnees['numDoc']; ?></td>
        <td><?php echo $donnees['nomDoc']; ?></td>
        <td><?php echo $donnees['prenomDoc']; ?></td>
        <td><?php echo $donnees['class']; ?></td>
        <td><?php echo $donnees['spec']; ?></td>
        <td><?php echo $donnees['lab']; ?></td>
        <td><?php echo $donnees['dep']; ?> </td>
         <td><?php echo $donnees['emailDoc']; ?> </td>
         <td><a href="edit.php?id=<?php echo $donnees['numDoc']; ?>">Edit</a></td>
         <td><a href="sup.php?id=<?php echo $donnees['numDoc']; ?>">supprime</a></td>
      </tr>
       
       <?php

}?>
       <br>
    </tbody>
</table>

<?php
$reponse->closeCursor(); 
?>
