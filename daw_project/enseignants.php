<?php
include "includes/header.php";
include "includes/sidebar.php";

$reponse = $bdd->query('SELECT * FROM ENSEIGNANT, MEMBER, USER WHERE USER.ID = MEMBER.ID AND ENSEIGNANT.ID = MEMBER.ID');
?>
<div class="container">
  <br>
  <h3>Enseignants </h3>
  <table class="table table-dark">
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
          <td><?php echo $donnees['USER.ID']; ?></td>
          <td><?php echo $donnees['nom']; ?></td>
          <td><?php echo $donnees['prenom']; ?></td>
          <td><?php echo $donnees['grade']; ?></td>
          <td><?php echo $donnees['spec']; ?></td>
          <td><?php echo $donnees['lab']; ?></td>
          <td><?php echo $donnees['dep']; ?> </td>
          <td><?php echo $donnees['email']; ?> </td>
          <td><?php echo $donnees['nbr_doc']; ?> </td>
          <td><a href="edit_ens.php?id=<?php echo $donnees['USER.ID']; ?>">Edit</a></td>
          <td><a href="sup_ens.php?id=<?php echo $donnees['USER.ID']; ?>">supprime</a></td>
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