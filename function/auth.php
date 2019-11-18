<?php
    function connect() : bool
    {
        if(session_status() === PHP_SESSION_NONE)
        {
            session_start();
        }
        return !empty($_SESSION['connecte']);
    }
    function user_connect(): void
    {
        if (!connect()) {
            header('location: /index.php');
            exit();
        }
    }
