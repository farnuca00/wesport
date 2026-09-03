<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="it" style="overflow-y: hidden;">
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
<body style="background-color: #f8f9fa;">
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

    <div id="login-form" class="container-form fade-in-image">
        <div class="fade-in-image col-md-12 mb-3">
                <img id="logo" class="img-fluid" src="Fubles.png">
                <img id="logo-mobile" class="img-fluid" src="Fubles-mobile.png">
            </div>

        <form style="width:33%;" class="ctr-form" method="post" name="formlogin" onSubmit="return validaLogin();" action="checkLogin.php">
            <d class="row justify-content-md-center">
                <div class="col-md-4 mb-3">
                    <label for="cognome">Email</label>
                    <input type="email" class="form-control" name="inputemail" id="email" placeholder="Email" onChange="retogglediv('invalidemail'); retogglediv2('email');">
                    <div id="invalidemail" class="invalid-feedback" style="display: none;">
                        Inserire una email
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="stato">Password</label>
                    <input type="password" class="form-control" id="password" name="inputpassword" placeholder="Password" onChange="retogglediv('invalidpassword'); retogglediv2('password');">
                    <div id="invalidpassword" class="invalid-feedback" style="display: none;">
                        Inserisci la password
                    </div>
                </div>

                <div class="justify-content-md-center">
                    <div style="text-align:center;">
                        <button class="btn btn-signup justify-content-md-center" name="submit" type="submit">Login</button>
                    </div>
                </div>

                <?php
                    if(isset($_SESSION['error'])){
                        echo '<div class="row justify-content-md-center">
                        <div class="col-md-4 mb-3">
                            <h4 style="color: red;">La password è errata</h4><br>
                        </div>';
                    }
                ?>
  
                <div class="justify-content-md-center">
                    <div style="text-align:center; margin-top: 10px;">
                        Non sei iscritto? Registrati <a href="registrazione.php">qui</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="login-form-mobile" class="container-form fade-in-image">
        <div class="fade-in-image col-md-12 mb-3">
                <img id="logo" class="img-fluid" src="Fubles.png">
                <img id="logo-mobile" class="img-fluid" src="Fubles-mobile.png">
            </div>

        <form method="post" name="formlogin1" onSubmit="return validaLogin1();" action="checkLogin.php">
            <d class="row justify-content-md-center">
                <div class="col-md-4 mb-3">
                    <label for="cognome"><b>Email</b></label>
                    <input type="email" class="form-control" name="inputemail" id="email1" placeholder="Email" onChange="retogglediv('invalidemail1'); retogglediv2('email1');">
                    <div id="invalidemail1" class="invalid-feedback" style="display: none;">
                        Inserire una email
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="stato"><b>Password</b></label>
                    <input type="password" class="form-control" id="password1" name="inputpassword" placeholder="Password" onChange="retogglediv('invalidpassword1'); retogglediv2('password1');">
                    <div id="invalidpassword1" class="invalid-feedback" style="display: none;">
                        Inserisci la password
                    </div>
                </div>

                <div class="justify-content-md-center">
                    <div style="text-align:center;">
                        <button class="btn btn-signup justify-content-md-center" name="submit" type="submit">Login</button>
                    </div>
                </div>
                <?php
                    if(isset($_SESSION['error'])){
                        echo '<div class="row justify-content-md-center">
                        <div class="col-md-4 mb-3">
                            <h4 style="color: red;">La password è errata</h4><br>
                        </div>';
                    }
                ?>
            </div>
        </form>
    </div>
    <div id="notsigned" style="height: 10%;">
        <div style="text-align:center; margin-top:3%;">
            Non sei ancora iscritto?
            <a href="registrazione.php"><button id="btn-login" type="button" class="btn btn-login btn-lg">Registrati</button></a>
        </div>
    </div>
</body>
</html>