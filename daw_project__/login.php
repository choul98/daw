

<?php
session_start();
include "includes/connection.php";
if(isset($_POST['email']) && isset($_POST['pass'])) {
    $email = $_POST['email'];
    $pass  = $_POST['pass'];
    $sql = "SELECT * FROM USER WHERE EMAIL = :email";
    
    $reponse = $bdd->prepare($sql);
    $reponse->bindValue(':email', $email);
    $reponse->execute();
    $donnees = $reponse->fetch();
    $_SESSION["email"]=$_POST['email'];
    if($donnees) {
        $number_of_rows = sizeof($donnees);
        if($number_of_rows == 0) {
            # user does not exist.
            header("Location: index.php");
        } else {
            if($pass == $donnees['PASSWORD']) {
                $role = $donnees['ROLE'];
                if($role == 'A') {
                    $_SESSION["sujet"]="admin";
                    header("Location: admin.html");
                } elseif ($role == 'S') {
                    # subscriber
                    # profile page for subscriber here
                } elseif ($role == 'E') {
                    $_SESSION["sujet"]="ens";
                       header("Location: ens.php");
                } else {
                    $_SESSION["sujet"]="doc";
                    header("Location: doc.php");
                }
            }
        }
    }
}
   
    
?>