<?php
    function connect() : bool
    {
        if(session_status() === PHP_SESSION_NONE)
        {
            session_start();
        }
        return !empty($_SESSION['connect']);
    }
    function user_connect(): void
    {
        if (!connect()) {
            header('location: /login.php');
            exit();
        }
    }
