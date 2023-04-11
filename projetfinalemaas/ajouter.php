<?php 

session_start();
require_once 'session.php';
require_once 'connect.php';
include 'css/bootstrap.php';

?>

<div class="container-fluid" style="width: 50%;margin-top:150px">
    <form method="POST" action="">
    <div class="mb-3">
        <label for="prenom" class="form-label">Prenom</label>
        <input type="text" class="form-control" id="" name="prenom" placeholder="Ahmadou Bamba">
    </div>
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="" name="nom" placeholder="Sow">
    </div>
    <div class="mb-3">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="" name="adresse" placeholder="Thiès">
    </div>
    <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
    </form>
</div>

<? include 'footer.php'; 

if(isset($_POST['ajouter'])){
    if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['adresse'])){
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $adresse = htmlspecialchars($_POST['adresse']); 

        $insert = "INSERT INTO enregistrementeleve (prenom, nom, adresse) VALUES (?,?,?)";
        $prepare = $mysqlclient->prepare($insert);
        $prepare->execute(array($prenom,$nom,$adresse));

        if($insert){
            header('location:pageadmin.php');
        }
    }
}

?>