<?php

include "includes/connection.php";

if(isset($_POST['email']) && isset($_POST['pass'])) {
    $email = $_POST['email'];
    $pass  = $_POST['pass'];

    $sql = "SELECT * FROM USER WHERE EMAIL = :email";
    
    $reponse = $bdd->prepare($sql);
    $reponse->bindValue(':email', $email);
    $reponse->execute();
    $donnees = $reponse->fetch();

    if($donnees) {
        $number_of_rows = sizeof($donnees);
        if($number_of_rows == 0) {
            # user does not exist.
            header("Location: index.php");
        } else {
            if($pass == $donnees['PASSWORD']) {
                $_SESSION['ID'] = $donnees['ID'];
                $role = $donnees['ROLE'];
                if($role == 'A') {
                    # admin
                    $_SESSION['sujet']="admin";
                    header("Location: dashboard.php");
                } elseif ($role == 'S') {
                    # subscriber
                    # profile page for subscriber here
                } elseif ($role == 'E') {
                   header("Location: ens.php");
                } else {
                    # profile page for doctorant here
                }
            }
        }
    }
}
   

    
?>