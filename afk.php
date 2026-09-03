<?php
    $host = "localhost";
    $user = "avid3868345";
    $database = "my_avid3868345";
    $tbl_name  = "user_online";
    $dbconn = mysqli_connect($host, $user, "", $database) or die("Errore durante la connessione al database");


    $user = $_POST['user'];
    json_decode($user);
    $sql1 = "UPDATE $tbl_name SET afk=1 WHERE username='$user'";
    $result1 = mysqli_query($dbconn, $sql1);?>