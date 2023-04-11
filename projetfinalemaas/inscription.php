<?php

include 'header.php';

?>
    <div class="container">    
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="POST" action="inscription_traitement.php">
                    <div class=" login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="email" name="email" class="login__input" placeholder="Email" required>
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="password" class="login__input" placeholder="Password" required>
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="password_retype" class="login__input" placeholder="Password" required>
                    </div>
                    <button class="button login__submit" name="inscription">
                        <span class=" button__text">S'INSCRIRE</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                    <p style="text-align:center;margin-top:20px;font-weight:bolder;"><a style="color: white;" href="login.php">Se Connecter</a></p>
                </form>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>


    <?php include 'footer.php';  ?>