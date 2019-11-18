<?php
    require_once('elements/header.php');
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

    </section>

<?php
    require_once('elements/footer.php');
?>