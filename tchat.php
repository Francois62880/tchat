<?php
session_start();
    require_once ('elements/header.php');
    require_once ('function/auth.php');
?>
<section class="tchat">
    <div class="messages">

    </div>
    <div class="user-inputs">
        <form action="handler.php?task=write">
            <input type="text" name="author" id="author" placeholder="Nickname ?">
            <input type="text" id="content" name="content" placeholder="Type in your message right here !">
            <button type="submit">Send !</button>
        </form>
    </div>
    <div class="row btn offset-lg-5">
        <?php if(connect()): ?>
        <a href="/logout.php" class="btn btn-primary">Déconnexion</a>
        <?php endif ?>
    </div>
</section>

<?php
    require_once('elements/footer.php');
?>