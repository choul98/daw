<?php
include "includes/header.php";
include "includes/sidebar.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM DOCTORANT, MEMBER, USER WHERE USER.ID = MEMBER.ID AND DOCTORANT.ID = MEMBER.ID AND USER.ID = :id";
  $reponse = $bdd->prepare($sql);
  $reponse->bindValue(':id', $id);
  $reponse->execute();
  $donnees = $reponse->fetch();
  if(!$donnees) {
    header("Location: dashboard.php");
  }
} else {
  header("Location: dashboard.php");
}
  

?>
<div class="container">
  <h3>Modification du doctorant</h3>
  <br>
  <form method="post" action="updct.php">
    <input type="hidden" name="ID" value="<?php echo $id; ?>">
    
    <input type="hidden" name="PASS" value="<?php // this is not secure, just for quick developement here
                                                  echo $donnees['PASSWORD']; ?>">
    <input type="hidden" name="ROLE" value="<?php echo $donnees['ROLE']; ?>">
    <div class="form-group">
      <label for="EMAIL">
        <h5>Email</h5>
      </label>
      <input class="form-control" type="email" name="EMAIL" readonly value="<?php echo $donnees['EMAIL'] ?>">
    </div>
    <div class="form-group">
      <label for="NOM">
        <h5>Nom</h5>
      </label>
      <input class="form-control" type="text" name="NOM" readonly value="<?php echo $donnees['NOM'] ?>">
    </div>
    <div class="form-group">
      <label for="PRENOM">
        <h5>Prénom</h5>
      </label>
      <input class="form-control" type="text" name="PRENOM" readonly value="<?php echo $donnees['PRENOM'] ?>">
    </div>
    <div class="form-group">
      <label for="CLASS">
        <h5>Classement</h5>
      </label>
      <input class="form-control" type="text" name="CLASS" value="<?php echo $donnees['CLASS'] ?>">
    </div>
    <div class="form-group">
      <label for="SPEC">
        <h5>Specialité</h5>
      </label>
      <input class="form-control" type="text" name="SPEC" value="<?php echo $donnees['SPEC'] ?>">
    </div>
    <div class="form-group">
      <label for="LAB">
        <h5>Laboratoire de doctorant</h5>
      </label>
      <input class="form-control" type="text" name="LAB" value="<?php echo $donnees['LAB'] ?>">
    </div>
    <div class="form-group">
      <label for="DEP">
        <h5>departement de doctorant</h5>
      </label>
      <input class="form-control" type="text" name="DEP" value="<?php echo $donnees['DEP'] ?>">
    </div>
    <br>

    <input class="btn btn-success" type="submit" name="submit" value="Modifier">
  </form>
</div>
