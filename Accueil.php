<?php

if (isset($_POST['valider'])) {
    extract($_POST);
    if(isset($_POST['matricule']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['date_naiss']) && isset($_POST['lieu_naiss'])&& isset($_POST['email']) && isset($_POST['adresse']) && isset($_POST['sexe']) && isset($_POST['serie']) && isset($_POST['filiere'])&& isset($_POST['somme']) && isset($_POST['reliquat']))
    {
        include "bdd.php";
        $query = $bdd->prepare("INSERT INTO etudiant (matricule,prenom,nom,date_naiss,lieu_naiss,email,adresse,sexe,serie,filiere,somme,reliquat) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
        $query->execute(array($matricule,$prenom,$nom,$date_naiss,$lieu_naiss,$email,$adresse,$sexe,$serie,$filiere,$somme,$reliquat));
        echo "insertion reussie";
    }
    else "remplir des données";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

         <title>Gestion des inscriptions</title>
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
               <span class="navbar-brand">Gestion des inscriptions</span>
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
						<li>
						     <a href="logout.php"><i class="fa fa-table fa-fw"></i><b>Deconnexion</a></b></a> 
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
                    <h3 class="page-header">Inscriptions</h3>
                </div>
				<div class="container">
            <div class="row">
                
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Les informations de l'étudiant sont:
                        </div>
                        <div class="panel-body">
                            <div class="row">
							 <form action='' method="post">
                                <div class="col-md-5">
                                        <div class="form-group">
										<label>Matricule</label>
                                            <input class="form-control" type="text" name="matricule" />
                                        <label>Prenom</label>
                                            <input class="form-control" type="text" name="prenom"/>
											<label>Nom</label>
                                            <input class="form-control" type="text" name="nom"/>
                                       
                                            <label>Date de naissance</label>
                                            <input class="form-control" type="date" name="date_naiss"/>
                                    
										<label>Lieu de naissance</label>
                                            <input class="form-control" type="text" name="lieu_naiss"/>
										<label>Email:</label>
	                                        <input class="form-control" type="mail" name="email" placeholder="EX:gueyekine96@gmail.com" /><br>
										
											
										  <button type="submit" name="valider" class="btn btn-success">Ajouter</button></button>
                                        <button type="reset" class="btn btn-danger">Annuler</button> 
                                        </div>
		
                                </div>
								
								<div class="col-md-7">
                                        <div class="form-group">
                        
										<label>Adresse:</label>
	                                        <input class="form-control" type="text" name="adresse"  placeholder="EX: Cité Ousmane Ngom" style="width:500px;"/>
                                   
										<label>Sexe</label>
                                          
										   <select class="form-control" name="sexe" style="width:75px;"> 
										   <option>M</option> 
										   <option>F</option> 
										   </select>
                                        <label>Série du BAC:</label>
	                                        <select class="form-control "name="serie" style="width:75px;">
	                                        <option>S1</option>
	                                        <option>S2</option>
	                                        <option>L1</option>
	                                        <option>L'</option>
	                                        <option>L2</option>
	                                        <option>G</option>
	                                        </select>
										<label>Filière:</label>
	                                        <select class="form-control" name="filiere" style="width:500px;"/>
	                                        <option>Informatique de gestion</option>
	                                        <option>Coptabilité et finance</option>
	                                        <option>Sciences politique et relation internationale</option>
	                                        <option>Science de gestion</option>
	                                        <option>Gestion des organisations</option>
	                                        </select>
										<label>Somme versée:</label>
                                            <input class="form-control" type="text" name="somme" style="width:500px;"//>
										<label>Reliquat</label>
                                            <input class="form-control" type="text" name="reliquat" style="width:500px;"//><br>
                                </div>
								
								<!-- <div class="form-group ">
										<button type="submit" name="valider" class="btn btn-success">Ajouter</button></button>
                                        <button type="reset" class="btn btn-danger">Annuler</button> 
								</div> -->
							

								</form>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
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
</body>
</html>
