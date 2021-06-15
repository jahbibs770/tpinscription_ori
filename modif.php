<?php
session_start();
include "bdd.php";
extract($_POST);

if(isset($_POST['valider']))
{
    if (isset($_SESSION['numero'])) {
        $numero = $_SESSION['numero'];
        if(isset($_POST['matricule']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['lieu_naiss']) && isset($_POST['date_naiss'])
			&& isset($_POST['email']) && isset($_POST['adresse']) && isset($_POST['somme']) && isset($_POST['reliquat']))
        {
            $query=$bdd->prepare("UPDATE etudiant SET matricule=?, prenom=?, nom=? ,adresse=?, sexe=?,serie=?,filiere=?,somme=?,reliquat=?,email=?,date_naiss=?,lieu_naiss=? WHERE numero=$numero");
            $query->execute(array($matricule,$prenom,$nom,$adresse,$sexe,$serie,$filiere,$somme,$reliquat,$email,$date_naiss,$lieu_naiss));
            header("Location:gestion_des_inscriptions.php");
        }   
    }else{
        header("Location:gestion_des_inscriptions.php");
    }    
}else {
     echo "out";
}
?>