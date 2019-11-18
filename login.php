<?php
$error = null;
if(!empty($_POST['username']) && !empty($_POST['password']))
{
    if($_POST['username'] === 'John' && $_POST['password'] === 'Doe')
    {
        session_start();
        $_SESSION['connect'] = 1;
        header('Location: /tchat.php');
        exit();
    }else{
        $error = "identifiant incorrects";
    }
}
require 'function/auth.php';
if(connect())
{
    header('Location: /tchat.php');
    exit();
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
            </div>
            <?php endif ?>

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