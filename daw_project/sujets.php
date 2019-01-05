<?php
include "includes/header.php";
include "includes/sidebar.php";
include "includes/functions.php";


if(isset($_GET['ida'])){
    $id=$_GET['ida'];
    $STATUS="ACCEPTED";
    update_sujet_status($id, $STATUS);
} elseif (isset($_GET['idr'])){
    $id=$_GET['idr'];
    delete_sujet($id);
}


$sql = "SELECT * FROM SUJET";

if(isset($_GET['ide'])) {
    # sujets for this enseignant only
    $id_e = $_GET['ide'];
    $sql .= " WHERE ID_E = '$id_e'";
}
?>
<div class="container">
  <br>
  <h3>Sujets <?php if(isset($id_e)) {
      $enseignant = get_user_name($id_e);
      echo "de $enseignant";
  }?></h3>
  <table class="table table-dark table-bordered table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>TITRE</th>
        <th>Description</th>
        <th>Les Motclés</th>
        <th># Proposed by</th>      
        <th># Choosed by</th>
        <th>Status</th>
        <th>Accepter</th>
        <th>Refuser</th>
        <th>Modifier</th>
      </tr>
        </thead>
    <tbody>
        <br>
      

<?php
$reponse = $bdd->query($sql);

while ($donnees = $reponse->fetch()){
    $id          = $donnees['ID'];
    $description = $donnees['DESCRIPTION'];
    $motcle      = $donnees['MOTCLE'];
    $id_e        = $donnees['ID_E'];
    $id_d        = $donnees['ID_D'];
    $status      = $donnees['STATUS'];
    $titre       = $donnees['titre'];
?>

<tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $titre; ?></td>
    <td><?php echo $description; ?></td>
    <td><?php echo $motcle; ?></td>
    <td><?php echo get_user_name($id_e); ?></td>
    <td><?php echo $id_d; ?></td>
    <td><?php
    if($status == "ACCEPTED") {
        echo "<p class='text-success'>$status</p></td>";
    } else {
        echo "<p class='text-danger'>$status</p></td>";
    }
?>
    <td><a class="btn btn-primary <?php if($status == 'ACCEPTED') {
        echo ' disabled';
    } else {
        echo '';
    } ?>" href="sujets.php?ida=<?php echo $id; ?>">Accepter</a></td>
    <td><a class="btn btn-danger" href="sujets.php?idr=<?php echo $id; ?>">Refuser</a></td>
    <td><a class="btn btn-info" href="edit_sujet.php?id=<?php echo $id; ?>">Modifier</a></td>
</tr>

<?php
}
?>

    </tbody>
  </table>
</div>

<br>

