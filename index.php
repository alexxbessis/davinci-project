<?php

require_once 'issam.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12" id="header_fiche">
            <h3>Fiche Etudiant : </h3>
        </div>
    </div>
    <div class="row justify-content-center" id="grande_row">
        <div class="row col-6">
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
            <div class="row justify-content-center col-12" id="tableau">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row col-6 no-gutters">

        </div>
    </div>
</div>

</body>
</html>
