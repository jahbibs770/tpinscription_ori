<?php
session_start();
if($_GET["numero"])
{
    include "bdd.php";
    $numero = $_GET["numero"];
    $output=$bdd->prepare("DELETE FROM etudiant WHERE numero = '$numero'");
    if($output->execute())
    header("Location:gestion_des_inscriptions.php");

}else{
    echo 'Not ok';
}
?>