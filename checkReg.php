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
    <title>WeSport - Registrati</title>
</head>
<body style="background-color: #61C2A2">
    <div class="navbar navbar-dark bg-dark sticky-top">    
        <a id="brand" class="navbar-brand" href="index.php"><img height="36" src="logo.png"></a>
        <a id="brand-mobile" class="navbar-brand" href="index.php"><img height="36" src="icon.png"></a>
    </div>

    <div id="slideshow-login" class="bg-image">

        <div id="slide1" class="slide">
            <img src="background/pallavolo.jpg">
        </div>

        <div id="slide2" class="slide">
          <img src="background/calcio.jpg">
        </div>

        <div id="slide3" class="slide">
            <img src="background/padel.jpg">
        </div>

        <div id="slide4" class="slide">
          <img src="background/tennis.jpg">
        </div>

        <div id="slide5" class="slide">
           <img src="background/basket.jpg">
        </div>

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
                $username = $_POST['inputusername'];
                $q1 = "select * from users where email = '$email'";
                $q2 = "select * from users where username = '$username'";
                $result = mysqli_query($dbconn, $q1);
                $result1 = mysqli_query($dbconn, $q2);
                if($line = mysqli_fetch_row($result1) || $line = mysqli_fetch_row($result) ) {
                    echo '<div style="width:80%;" class="ctr-form justify-content-md-center">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <h3>Esiste già un utente registrato con questa email o username</h3> <br> <p>Se sei tu clicca <a href="login.php">QUI</a> per loggarti</p>
                                </div>
                            </div>
                          </div>';
                }
                else {
                    $nome = $_POST['inputname'];
                    $username = $_POST['inputusername'];
                    $password = $_POST['inputpassword'];
                    $sex = $_POST['sex'];
                    $q2 = "insert into users values ('$nome', '$email', '$username', md5('$password'), '$sex')";
                    $data = mysqli_query($dbconn, $q2);
                    if($data){
                        echo '<div class="ctr-form justify-content-md-center">
                                <div class="row">
                                    <div class="col-md-12 mb-3"><h2>Registrazione completata</h2><br> Clicca <a href="login.php">QUI</a> per loggarti
                                    </div>
                                </div>
                              </div>';
                    }
                }
            }
        ?>
    </div>

</body>
</html>