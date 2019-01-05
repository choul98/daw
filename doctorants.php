<?php
include "includes/header.php";
include "includes/sidebar.php";

$c=1;
$reponse = $bdd->query('SELECT * FROM DOCTORANT, MEMBER, USER WHERE USER.ID = MEMBER.ID AND DOCTORANT.ID = MEMBER.ID');
?>
<div class="container">
  <br>
  <h3>Doctorants</h3>
  <table class="table table-dark table-bordered table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Classement</th>
        <th>Spécialité</th>
        <th>Laboratoire</th>
        <th>Departement</th>
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
          <td><?php echo $donnees['ID']; ?></td>
          <td><?php echo $donnees['NOM']; ?></td>
          <td><?php echo $donnees['PRENOM']; ?></td>
          <td><?php echo $donnees['CLASS']; ?></td>
          <td><?php echo $donnees['SPEC']; ?></td>
          <td><?php echo $donnees['LAB']; ?></td>
          <td><?php echo $donnees['DEP']; ?> </td>
          <td><?php echo $donnees['EMAIL']; ?> </td>
          <td><a class="btn btn-info" href="edit_doc.php?id=<?php echo $donnees['ID']; ?>">Modifier</a></td>
          <td><a class="btn btn-danger" href="sup_doc.php?id=<?php echo $donnees['ID']; ?>">Supprimer</a></td>
        </tr>
        
        <?php

  }?>
        <br>
      </tbody>
  </table>
</div>
<?php
$reponse->closeCursor(); 
?>
