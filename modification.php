 <?php
 session_start();

if($_GET["numero"])
{
    include "bdd.php";
    extract($_GET);
    $etudiants = $bdd->query("SELECT * FROM etudiant where numero ='$numero'");
    $etudiant=$etudiants->fetch();
    $_SESSION["numero"] = $etudiant['numero'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

         <title>Gestion de notes</title>


    <link href="asset/bootstrap.min.css" rel="stylesheet"/>
    <link href="asset/metisMenu.min.css" rel="stylesheet"/>
    <link href="asset/sb-admin-2.css" rel="stylesheet"/>
    <link href="asset/font-awesome.css" rel="stylesheet" type="text/css"/>


</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
               
               <span class="navbar-brand">Gestion de notes</span>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                                              
						<li>
                            <a href="Accueil.php"><i class="fa fa-edit fa-fw"></i><b>Ajout des inscrits</b></a>
                        </li>
                        <li>
                            <a href="gestion_des_inscriptions.php"><i class="fa fa-table fa-fw"></i><b>Gestion des inscriptions </b></a>
                        </li>
						<li>
                            <a href="suivis_des_inscriptions.php"><i class="fa fa-search fa-fw"></i><b>Suivi des inscriptions</b></a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Modification des enregistrements</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Formulaire de modification
                        </div>
                        <div class="panel-body">
                            <div class="row">
							 <form action='modif.php' method="post">
                                <div class="col-md-5">
                                        <div class="form-group">
										<label>Matricule</label>
											<input required class="form-control" type="text" value='<?php echo $etudiant["matricule"]?>' name='matricule'/>
                                            
                                        <label>Prenom</label>
											<input required class="form-control" type="text" value='<?php echo $etudiant["prenom"]?>' name='prenom'/>
                                            
											<label>Nom</label>
                                  			<input required class="form-control" type="text" value='<?php echo $etudiant["nom"]?>' name='nom'/>
										
                                            <label>Date de naissance</label>
                                            <input required class="form-control" type="date" value='<?php echo $etudiant["date_naiss"]?>' name='date_naiss'/>
                                    
										
										<label>Lieu de naissance</label>
                                             <input required class="form-control" type="text" value='<?php echo $etudiant["lieu_naiss"]?>' name='lieu_naiss'/>
									     <label>Email</label>
											<input required class="form-control" type="mail" value='<?php echo $etudiant["email"]?>' name='email'/>
                                            
                                   
									
										<button type="submit" name="valider" class="btn btn-success">Valider</button></button>
                                        </div>	
                                </div>
                  <div class="col-md-7">
                                        <div class="form-group">
                        
										<label>Adresse:</label>
	                                        <input required class="form-control" type="text" value='<?php echo $etudiant["adresse"]?>'name="adresse"  />
                                   
										<label>Sexe</label>
										   <select class="form-control" name="sexe" style="width:75px;"> 
                                                <option value="" selected disabled hidden>Sexe</option>
                                                <option>M</option> 
                                                <option>F</option> 
										   </select>
                                        <label>Série du BAC:</label>
	                                        <select class="form-control "name="serie">
                                                <option value="" selected disabled hidden>Série</option>
                                                <option>S1</option>
                                                <option>S2</option>
                                                <option>L1</option>
                                                <option>L'</option>
                                                <option>L2</option>
                                                <option>G</option>
	                                        </select>
										<label>Filière:</label>
	                                        <select class="form-control" name="filiere">
                                                <option value="" selected disabled hidden>Filière</option>
                                                <option>Informatique de gestion</option>
                                                <option>Coptabilité et finance</option>
                                                <option>Sciences politique et relation internationale</option>
                                                <option>Science de gestion</option>
                                                <option>Gestion des organisations</option>
	                                        </select>
										<label>Somme versée:</label>
                                            <input required class="form-control" type="text" value='<?php echo $etudiant["somme"]?>' name="somme"/>
										<label>Reliquat</label>
                                            <input required class="form-control" type="text"  value='<?php echo $etudiant["reliquat"]?>'name="reliquat"/><br>
                                </div>             
								</form>
                                <!-- /.col-lg-6 (nested) -->
                      
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
<?php
}
?>		

</body>

</html>
