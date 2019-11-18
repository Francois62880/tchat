<?php
require 'function/auth.php';
user_connect();
require_once ('elements/header.php');
?>

<div class="container">
    <div class="row">
        <div class="offset-lg-2 col-lg-8">
            <h4 class="titre">Connectez-vous pour accéder au tchat !</h4>
            
        </div>
    </div>
</div>
<?php
require_once('elements/footer.php');
?>