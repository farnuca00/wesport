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
            require 'db.php';

            
            if(!(isset($_POST['submit']))) {
                header("Location: index.php");
            }
            else{
                $email = $_POST['inputemail'];
                $username = $_POST['inputusername'];
                $result = q($dbconn, "select * from users where email = ?", [$email]);
                $result1 = q($dbconn, "select * from users where username = ?", [$username]);
                if (mysqli_num_rows($result) > 0 || mysqli_num_rows($result1) > 0) {
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
                    $password = $_POST['inputpassword'];
                    $sex = $_POST['sex'];
                    $data = q($dbconn, "insert into users values (?, ?, ?, md5(?), ?)", [$nome, $email, $username, $password, $sex]);
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