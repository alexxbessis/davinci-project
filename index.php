<?php

require_once 'issam.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/50c50d149f.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12 header_fiche">
            <h3>Fiche Etudiant : </h3>
        </div>
    </div>
    <div class="row justify-content-center" id="grande_row">
        <div class="row-fluid col-6">
            <div class="row col-12">
                <div class="col-4">
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
                <div class="col-5">
                    <div class="card">
                        <i class="fa fa-home"></i>
                        <i class="fa fa-phone"></i>
                        <i class="fa fa-mobile"></i>
                        <i class="fa fa-envelope"></i>
                        <i class="fa fa-envelope"></i>
                        <a href="#" role="button" class="btn btn-secondary btn-sm">Demande de changement</a>
                    </div>
                </div>
                <div class="col-2">
                    <div>
                        <img src="img/17IDERRAR.jpg" alt="">
                    </div>
                    <a href="#" class="btn btn-secondary btn-small offset-2">Changer</a>
                </div>
            </div>
            <div class=" col-12" id="tableau">
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
            <div class="row-fluid">
                <div class="header_fiche col-12">
                   <h5> Mes groupes</h5>
                </div>
                <div class="row">

                </div>
            </div>
        </div>
        <div class="row col-6 no-gutters" id="row_droite">

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
