<?php 
session_start();
if(isset($_SESSION['inputemail'])){
    $session = session_id();
    $time = time();
    $time_check = $time-700; 
}
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "icon.png" type = "image/x-icon">
    <title>WeSport</title>
</head>
<body>
    <div class="navbar navbar-dark bg-dark sticky-top">
        <a id="brand" style="margin-top: 3px;" class="navbar-brand" href="index.php"><img height="36" src="logo.png"></a>
        <a id="brand-mobile" class="navbar-brand" href="index.php"><img height="36" src="icon.png"></a>
    </div>

    <div id="slideshow" class="bg-image">

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
    
    <div id="home-text">
        <div class="justify-content-md-center">
            <div class="fade-in-image col-md-12 mb-3">
                <img id="logo" class="img-fluid" src="Fubles.png">
                <img id="logo-mobile" class="img-fluid" src="Fubles-mobile.png">
            </div>
            <div id="home-text-t">
                <b>Il modo più semplice per fare sport a Roma</b>
            </div>
        </div>
        <?php if(!isset($_SESSION['inputemail'])){
            echo '<div id="buttons-index-lg" class="justify-content-md-center">
                    <div style="margin-top: 40px;">
                        <a href="registrazione.php"><button id="btn-login" type="button" class="btn btn-login btn-lg">Registrati</button></a>
                        <a href="login.php"><button type="button" class="btn btn-signup btn-lg">Login</button></a>
                    </div>
                  </div>
                  <div id="buttons-index-sm" class="justify-content-md-center">
                        <a href="registrazione.php"><button id="btn-login" type="button" class="btn btn-login btn-xlarge">Registrati</button></a>
                        <a href="login.php"><button style="margin-top: 10px;" type="button" class="btn btn-signup btn-xlarge">Login</button></a>
                  </div>';
                }
        else{
            echo '<div style="margin-top: 5%;" class="justify-content-md-center">
                    <div>
                        <a href="homepage.php"><button type="button" class="btn btn-login btn-lg">Vai alle partite</button></a>
                    </div>
                  </div>';
        }
        ?>
        
    </div>
</body>
</html>