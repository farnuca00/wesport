<?php
    session_start();
    require 'db.php';

    if (!isset($_SESSION['inputemail'])) { exit; }

    q($dbconn,
    "UPDATE user_online SET afk = 1
    WHERE username = (SELECT username FROM users WHERE email = ?)",
    [$_SESSION['inputemail']]);
?>