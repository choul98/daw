<?php

include "connection.php";

$email=$_POST['email'];
$pass=$_POST['pass'];

//    if($_POST['radio'] == "doctorant" ){
//            $query = "SELECT * FROM DOCTORANT WHERE emailDoc = '$email'";
//            $result = $bdd->query($query);
//            $number_of_rows = $result->fetchColumn();
//            if($number_of_rows == 0) {
//                header("Location: index.php");
//            } else {
//                $data = $result->fetch();
//             
//                
//                if($data['passDoc'] == $pass) {
//                    header("Location: doc.php");
//                }else{
//                    echo'mot de pass not cerrect';
//                }
//            }
//         
//    }else
//if($_POST['radio'] == "admin" ){
//            $sql = "SELECT * FROM ADMIN WHERE emai = :email";
//            $reponse = $bdd->prepare($sql);
//            $reponse->bindValue(':email', $email);
//            $reponse->execute();
//            $donnees = $reponse->fetch();
//            $number_of_rows = $reponse->fetchColumn();
//            if($number_of_rows == 0) { 
//                echo $number_of_rows;
//            } else{
//                if($_POST['pass']==$donnees['passAdmin']){
//                    header("Location: admin.html");
//                }else{
//                    echo'mot de pass not cerrect';
//                }
//            }
//          
//    }
      header("Location: admin.html");
         
//    }elseif($_POST['radio'] == "doctorant" ){
//            $query = "SELECT * FROM DOCTORANT WHERE emailDoc = '$email'";
//            $result = $bdd->query($query);
//            $number_of_rows = $result->fetchColumn();
//            if($number_of_rows == 0) {
//                header("Location: index.php");
//            } else {
//                $data = $result->fetch();
//             
//                
//                if($data['passDoc'] == $pass=$_POST['pass']) {
//                    header("Location: doc.php");
//                }else{
//                    echo'mot de pass not cerrect';
//                }
//            }
//         
    

    
?>