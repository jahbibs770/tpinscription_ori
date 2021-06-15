<?php
 session_start();

if($_GET["numero"])
{
    include "bdd.php";
    extract($_GET);
    $etudiants = $bdd->query("SELECT * FROM etudiant where numero ='$numero'");
    $etudiant=$etudiants->fetch();
    extract($etudiant);
}    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Recu de l'étudiant</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:300|Raleway:200,300" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="impression.css">
    </head>

    <body>
        <header>
            <h1>FACTURE
            <h2>Matricule: <?php echo $matricule ;?></h2>
            </h1>
        </header>

        <section class="flex">
            <dl class="bloc">
                <b><dt>Prenom: </b><?php echo $prenom;?></dt>
            </dl>
            <dl class="bloc">
                <b><dt>Nom: </b><?php echo $nom ;?></dt>
            </dl>
            <dl class="bloc">
                <b><dt>Date de Naissance: </b><?php echo $date_naiss;?></dt>
            </dl>
            <dl class="bloc">
                <b><dt>Lieu de Naissance: </b><?php echo $lieu_naiss ;?></dt>
            </dl>
            <dl class="bloc">
                <b><dt>Filière: </b><?php echo $filiere ;?></dt>
            </dl>
            <dl class="bloc">
                <b><dt>Serie: </b><?php echo $serie ;?></dt>
            </dl>
        </section>
        <table>
            <thead>
            <tr> 
                <th>Frais d'inscription</th>
                <th>Reliquat</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $somme ;?></td>
                <td><?php echo $reliquat ;?></td>
            </tr>
            </tbody>
            <tfoot>
            <tr> 
                <td colspan="3"></td>
                <td>Total:</td>
                <td><?php echo (int)$somme+(int)$reliquat ;?></td>
            </tr>
            </tfoot>
        </table>
    <footer>
        <p>Facture d'inscription</p>
    </footer>

    <script>
        window.print();
        setTimeout(() => {
            window.history.back();  
        }, 6000);
        
    </script>
    </body>
</html>
