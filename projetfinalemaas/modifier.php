<?php 

session_start();

require_once 'session.php';
require_once 'connect.php';
include 'css/bootstrap.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $select = $mysqlclient->query("SELECT * FROM enregistrementeleve WHERE id = $id");
    $aff = $select->fetch();

};

?>

<div class="container-fluid" style="width: 50%;margin-top:150px">
    <form method="POST" action="">
    <div class="mb-3">
        <label for="prenom" class="form-label">Prenom</label>
        <input type="text" class="form-control" id="" name="prenom" value="<?php echo $aff['prenom']; ?>">
    </div>
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="" name="nom" value="<?php echo $aff['nom']; ?>">
    </div>
    <div class="mb-3">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="" name="adresse" value="<?php echo $aff['adresse']; ?>">
    </div>
    <button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
    </form>
</div>

<?php 
include 'footer.php';

if(isset($_POST['modifier'])){
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $adresse = htmlspecialchars($_POST['adresse']);

    $update = $mysqlclient->prepare(" UPDATE enregistrementeleve SET prenom=?, nom=?, adresse=? WHERE id = $id "  );
    $update->execute(array($prenom,$nom,$adresse));

    if($update){
        header('location:pageadmin.php');
    };
};


?>