<?php

session_start();

require_once 'session.php';
require_once 'connect.php';
include 'css/bootstrap.php';

?>

<div class="container-fluid" style="background-color: white;">

     <div style="text-align: center;" class="mt-5">
        <h1 style="font-weight: bolder;text-decoration:underline">Utilisateurs</h1>
     </div>

    <div style="text-align: right;margin:10px;">
        <button class="btn btn-primary"><a style="color: white;font-weight: bolder;" href="ajouter.php">Ajouter un Utilisateur</a></button>
    </div>
    <div style="text-align: right;margin-right:35px;margin-bottom:10px;">
        <button class="btn btn-danger"><a style="color: white;font-weight:bolder" href="deconnexion.php">Deconnexion</a></button>
    </div>
    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <?php 
            
            $select = "SELECT * FROM enregistrementeleve";
            $prepare = $mysqlclient->query($select);
            while($aff=$prepare->fetch()){
                ?>

        <tbody>
            <tr>
                <td><? echo $aff['id']; ?></td>
                <td><? echo $aff['prenom']; ?></td>
                <td><? echo $aff['nom']; ?></td>
                <td><? echo $aff['adresse']; ?></td>
                <td>
                    <button class="btn btn-success ms-3">
                        <a href="modifier.php?id=<? echo $aff['id'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color: white;" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>   
                    </button>                 
                </td>
                <td>
                    <button class="btn btn-danger ms-3">
                        <a href="supprimer.php?id=<? echo $aff['id'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color: white;" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </a>
                    </button>
                </td>
            </tr>
        </tbody>
        <?php
            }

            ?>
    </table>
</div>
<? include 'footer.php'; ?>