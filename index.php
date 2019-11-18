<?php
require 'function/auth.php';
user_connect();
$error = null;
if(!empty($_POST['username']) && !empty($_POST['password']))
{
    if($_POST['username'] === 'John' && $_POST['password'] === 'Doe')
    {

    }else{
        $error = "identifiant incorrects";
    }
}

require_once ('elements/header.php');
?>
<div class="container">
    <div class="row">
        <div class="offset-lg-2 col-lg-8">
            <h4 class="titre">Connectez-vous pour accéder au tchat !</h4>
            <?php if($error): ?>
            <div class="alert alert-danger">
                <?= $error ?>
            <?php endif ?>
            </div>
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Nom d'utilisateur" class="form-contol">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Mot de passe" class="form-contol">
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
        </div>
    </div>
</div>
<?php
require_once('elements/footer.php');
?>