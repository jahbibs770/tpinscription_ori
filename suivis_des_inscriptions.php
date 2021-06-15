<?php
include "bdd.php";
$demba = $bdd->query('SELECT * FROM etudiant');
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

      <title>Suivis des inscriptions</title>

      <!-- Bootstrap Core CSS -->
    <link href="asset/bootstrap.min.css" rel="stylesheet"/>

    <!-- MetisMenu CSS -->
    <link href="asset/metisMenu.min.css" rel="stylesheet"/>

    <!-- Custom CSS -->
    <link href="asset/sb-admin-2.css" rel="stylesheet"/>

    <!-- Custom Fonts -->
    <link href="asset/font-awesome.css" rel="stylesheet" type="text/css"/>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                     <span class="navbar-brand">Suivis des inscriptions</span>
            </div>

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
                    <h3 class="page-header">Suivi des inscriptions</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Etat de suivi des inscriptions
							</div>
					
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Prénom</th>
                                        <th>Nom</th>
										<th>Date_nais</th>
										<th>Lieu_nais</th>
										<th>Email</th>
										<th>Adresse</th>
										<th>Sexe</th>
										<th>Somme versée</th>
										<th>Reliquat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php 
								while($ibra = $demba->fetch())
								{
									?>
									<tr>
									<td><?php echo $ibra['matricule']?></td>
									<td><?php echo $ibra['prenom']?></td>
									<td><?php echo $ibra['nom']?></td>
									<td><?php echo $ibra['date_naiss']?></td>
									<td><?php echo $ibra['lieu_naiss']?></td>
									<td><?php echo $ibra['email']?></td>
									<td><?php echo $ibra['adresse']?></td>
									<td><?php echo $ibra['sexe']?></td>
									<td><?php echo $ibra['somme']?></td>
									<td><?php echo $ibra['reliquat']?></td>
						
									    <?php 
								}
							?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			</div>
        </div>
        <!-- /#page-wrapper -->

    </div>

</body>

</html>
