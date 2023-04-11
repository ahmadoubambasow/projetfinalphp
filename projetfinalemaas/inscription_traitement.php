<?php 

require_once 'connect.php';

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype'])){

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $check = $mysqlclient->prepare("SELECT email, password FROM users WHERE email= ?");
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0){
        if(strlen($email) <= 100){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                if($password === $password_retype){
                    $password = hash('sha256', $password);
                    $insert = $mysqlclient->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');
                    $insert->execute([
                        'email' => $email,
                        'password' => $password                        
                    ]);

                    header('location:login.php');
                }header('location:inscription.php');
            }header('location:inscription.php');
        }header('location:inscription.php');
    }header('location:inscription.php');
};

?>