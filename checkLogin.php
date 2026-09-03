<?php 
session_start();
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
    <title>WeSport - Login</title>
</head>
<body style="background-color: #61C2A2">

    <?php
        if(!(isset($_POST['inputemail']))) {
            header("Location: index.php");
        }
    ?>
    <div class="navbar navbar-dark bg-dark sticky-top">    
        <a id="brand" class="navbar-brand" href="index.php"><img height="36" src="logo.png"></a>
        <a id="brand-mobile" class="navbar-brand" href="index.php"><img height="36" src="icon.png"></a>
    </div>

    <div class="container-form fade-in-image">
            <div class="fade-in-image col-md-12 mb-3">
                <img id="logo" class="img-fluid" src="Fubles.png">
                <img id="logo-mobile" class="img-fluid" src="Fubles-mobile.png">
            </div>

        <?php
            $host = "localhost";
            $user = "avid3868345";
            $database = "my_avid3868345";
            $dbconn = mysqli_connect($host, $user, "", $database) or die("Errore durante la connessione al database");
        
            if(!(isset($_POST['submit']))) {
                header("Location: index.php");
            }
            else{
                $email = $_POST['inputemail'];
                $q1 = "select * from users where email = '$email'";
                $result = mysqli_query($dbconn, $q1);
                if (!($line = mysqli_fetch_row($result))) {
                    echo '<div style="width:50%;" class="ctr-form">
                            <div class="row justify-content-md-center">
                                <div class="col-md-12 mb-3">
                                    Ci dispiace, ma non esiste un account registrato con questa email <br>
                                    Clicca <a href="registrazione.php">QUI</a> per registrarti!
                                </div>
                            </div>
                        </div>';
                }
                else{
                    $password = $_POST['inputpassword'];
                    $q2 = "select * from users where email = '$email' and password = md5('$password')";
                    $result = mysqli_query($dbconn, $q2);
                    if (!($line = mysqli_fetch_row($result))) {
                        $_SESSION['error'] = 1;
                        header('Location: login.php');
                    }
                    else{
                        $_SESSION["inputemail"] = $email;
                        header('Location: homepage.php');
                    }
                }
            }
        ?>

    </div>

</body>
</html>