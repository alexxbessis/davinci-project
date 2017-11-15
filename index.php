<?php

require_once 'issam.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>

<div class="container-fluid" id="corps">
    <div class="row">
        <div class="col-12 header_fiche">
            <h3>Fiche Etudiant : </h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="row-fluid col-md-6 col-sm-12">
            <div class="header_fiche">
                Information utiles
            </div>
            <div class="row col-11">
                <div class="col-md-5 col-sm-12">
                    <div class="card">
                        <h6>
                            Identifiant
                        </h6>
                        <p>IDERRAR</p>
                        <h6>
                            Num. Badge
                        </h6>
                        <p>...</p>
                        <h6>
                            ID Administratif
                        </h6>
                        <p>...</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <i class="fa fa-home"></i>
                        <i class="fa fa-phone"></i>
                        <i class="fa fa-mobile"></i>
                        <i class="fa fa-envelope"></i>
                        <i class="fa fa-envelope"></i>
                        <a href="#" role="button" class="btn btn-secondary btn-sm">Demande de changement</a>
                    </div>
                </div>
                <div class="col-md-1 col-sm-12 justify-content-sm-center">
                    <div class="">
                        <img src="img/17IDERRAR.jpg" alt="">
                    </div>
                    <a href="#" class="btn btn-secondary btn-small">Changer</a>
                </div>
            </div>
            <div class="col-md-12" id="tableau">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Programme</th>
                        <th>Année dans le cursus</th>
                        <th>Année</th>
                        <th>Délégué</th>
                        <th>Date cloture</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">PAIIMWB2</th>
                        <td>ANNEE 2 - AXE DEVELOPPEMENT WEB</td>
                        <td>2017</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">PAIIMNS1</th>
                        <td>ANNEE PREPARATOIRE</td>
                        <td>2016</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row-fluid" id="groupes">
                <div class="header_fiche col-12">
                   <h5> Mes groupes</h5>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="liste">
                            <li class="card">
                                <a href="#" class="card-body" role="button">
                                    <strong>2017-PAIIMWB2</strong>
                                    <p>IIM - année 2 - AXE DEVELOPPEMENT WEB</p>
                                </a>
                            </li>
                            <li class="card">
                                <a href="#" class="card-body">
                                    <strong>2016-PAIIMNS1</strong>
                                    <p>IIM - ANNEE 1 - PREPARATOIRE</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="offset-md-1 col-md-7">
                        <div class="header_fiche">
                            <h6>IIM - ANNEE 2 - AXE DEVELOPPEMENT WEB</h6>
                        </div>
                        <div>
                            <ul class="list-group">
                                <li class="list-group-item">IIM-2-DW-1</li>
                                <li class="list-group-item">IIM-2-DW</li>
                                <li class="list-group-item">SK29</li>
                                <li class="list-group-item">MIIMLV210117 COURS LV AN06</li>
                                <li class="list-group-item">MMIASPS-0017 - BXA2</li>
                                <li class="list-group-item">COOP12</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-md-6 col-sm-12" id="row_droite">
            <div class=" offset-md-1 col-md-11 col-sm-12">
                <div class="header_fiche">
                    Prochains cours
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Heure</th>
                        <th scope="col">Salle</th>
                        <th scope="col">Professeur</th>
                        <th scope="col">Thème</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="list-group-item-warning">
                        <th scope="row">20/11/2017</th>
                        <td>14h</td>
                        <td>E253</td>
                        <td>Alexandre Tobia</td>
                        <td>PHP/POO</td>
                    </tr>
                    <tr>
                        <th scope="row">21/11/2017</th>
                        <td>13h</td>
                        <td></td>
                        <td></td>
                        <td>Anglais</td>
                    </tr>
                    <tr>
                        <th scope="row">21/11/2017</th>
                        <td>14h45</td>
                        <td></td>
                        <td></td>
                        <td>Créativité et innovation</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="offset-md-1 col-md-11 col-sm-12">
                
            </div>
        </div>
    </div>
</div>
<?php

require_once 'footer.php';

?>
