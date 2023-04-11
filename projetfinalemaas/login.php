<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>

    <div class="container" style="background-color: white;">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="POST" action="traitementformulaire.php">
                    <div class=" login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="email" name="email" class="login__input" placeholder="Email" required>
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="password" class="login__input" placeholder="Password" required>
                    </div>
                    <button class="button login__submit" name="connect">
                        <span class=" button__text">Connectez-Vous</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
                <p style="margin-left: 20px;font-weight:bolder"><a href="inscription.php">S'inscrire?</a></p>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>


    </script>
</body>

</html>