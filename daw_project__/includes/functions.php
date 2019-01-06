<?php
    include "connection.php";

    # doctorant
    function isset_doctorant($nom, $prenom, $email, $pass, $role, $spec, $lab, $dep, $class) {
        return isset($nom) && isset($prenom) && isset($email) && isset($pass) && isset($role) && isset($spec) && isset($lab) && isset($dep) && isset($class);
    }

    function doctorant_exists($email) {
        global $bdd;
        $reponse = $bdd->query("SELECT * FROM USER WHERE EMAIL = '$email'");
        $number_of_rows = sizeof($reponse);
        return $number_of_rows >= 1;
    }

    function insert_doctorant($nom, $prenom, $email, $pass, $role, $spec, $lab, $dep, $class) {
        global $bdd;
        if(doctorant_exists($email)) {
            $id = uniqid('doc_'.rand());
            $bdd->exec("INSERT INTO USER ( ID, NOM, PRENOM, EMAIL, PASSWORD, ROLE ) VALUES ('$id', '$nom', '$prenom', '$email', '$pass', '$role')");
            $bdd->exec("INSERT INTO MEMBER ( ID, SPEC, LAB, DEP ) VALUES ('$id', '$spec', '$lab', '$dep' )");
            $bdd->exec("INSERT INTO DOCTORANT ( ID, CLASS ) VALUES ('$id', '$class')");
        } else {
            # doctorant already exists.
            # insert custom message here
        }
    }

    function delete_doctorant($id) {
        global $bdd;
        $bdd->exec("DELETE FROM USER WHERE ID = '$id'");
        $bdd->exec("DELETE FROM MEMBER WHERE ID = '$id'");
        $bdd->exec("DELETE FROM DOCTORANT WHERE ID = '$id'");
    }

    # enseignant
    function isset_enseignant($nom, $prenom, $email, $pass, $role, $spec, $lab, $dep, $grade, $nbr_doc) {
        return isset($nom) && isset($prenom) && isset($email) && isset($pass) && isset($role) && isset($spec) && isset($lab) && isset($dep) && isset($grade) && isset($nbr_doc);
    }

    function insert_enseignant($nom, $prenom, $email, $pass, $role, $spec, $lab, $dep, $grade, $nbr_doc) {
        global $bdd;
        $id = uniqid('ens_'.rand());
        $bdd->exec("INSERT INTO USER ( ID, NOM, PRENOM, EMAIL, PASSWORD, ROLE ) VALUES ('$id', '$nom', '$prenom', '$email', '$pass', '$role')");
        $bdd->exec("INSERT INTO MEMBER ( ID, SPEC, LAB, DEP ) VALUES ('$id', '$spec', '$lab', '$dep' )");
        $bdd->exec("INSERT INTO ENSEIGNANT( ID, GRADE, NBR_DOC ) VALUES ('$id', '$grade', '$nbr_doc' )");
    }

    function delete_enseignant($id) {
        global $bdd;
        $bdd->exec("DELETE FROM USER WHERE ID = '$id'");
        $bdd->exec("DELETE FROM MEMBER WHERE ID = '$id'");
        $bdd->exec("DELETE FROM ENSEIGNANT WHERE ID = '$id'");
    }

 function insert_sujet( $des, $motcle,$id_e) {
        global $bdd;
            $bdd->exec("INSERT INTO SUJET (DESCRIPTION, MOTCLE, ID_E, STATUS) VALUES ('$des', '$motcle', '$id_e')");
        }

    # CREATE TABLE USER (ID VARCHAR(255) PRIMARY KEY, NOM VARCHAR(255), PRENOM VARCHAR(255), EMAIL VARCHAR(255), PASSWORD VARCHAR(255), ROLE ENUM('A', 'S', 'E', 'D'))
    # CREATE TABLE MEMBER(ID VARCHAR(255) PRIMARY KEY, SPEC ENUM('STIC', 'RSD', 'GLAA', 'SIA'), LAB ENUM('MISC', 'LIRE'), DEP ENUM('IFA', 'TLSI'), FOREIGN KEY ID REFERENCES USER(ID))
    # CREATE TABLE DOCTORANT(ID VARCHAR(255) PRIMARY KEY, CLASS INT, FOREIGN KEY(ID) REFERENCES MEMBER(ID))
    # CREATE TABLE ENSEIGNANT(ID VARCHAR(255) PRIMARY KEY, GRADE INT, NBR_DOC INT, FOREIGN KEY(ID) REFERENCES MEMBER(ID))

    

?>