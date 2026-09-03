<?php session_start();
session_regenerate_id();
session_destroy();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "icon.png" type = "image/x-icon">
    <title>WeSport - Logout</title>
</head>
<body style="background-color: #61C2A2">

    <?php
        if(!(isset($_POST['inputemail']))) {
            header("Location: index.php");
        }
            $host = "localhost";
            $user = "avid3868345";
            $database = "my_avid3868345";
            $tbl_name  = "user_online";
            $dbconn = mysqli_connect($host, $user, "", $database) or die("Errore durante la connessione al database");


            $email = $_SESSION["inputemail"];
            $q1 = "select username from users where email= '$email'";
            $result = mysqli_query($dbconn, $q1);
            $line = mysqli_fetch_row($result);

            $q1 = "delete from user_online where username= '$line[0]'";
            $result = mysqli_query($dbconn, $q1);
    ?>
    <div class="navbar navbar-dark bg-dark sticky-top">    
        <a class="navbar-brand" href="index.php"><img height="36" src="logo.png"></a>
        <a href="registrazione.php"><button type="button" class="btn btn-login float-r">Registrati</button></a>
        <a href="login.php"><button type="button" class="btn btn-signup float-r">Login</button></a>
    </div>

    <div class="container-form fade-in-image">
        <div class="logo-center">
            <img src="logo.png">
        </div>

        <div class="ctr-form justify-content-md-center">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h3>Logout avvenuto con successo</h3> <br> <p>Torna alla homepage cliccando <a href="login.php">QUI</a></p>
                </div>
            </div>
        </div>

    </div>

</body>
</html>