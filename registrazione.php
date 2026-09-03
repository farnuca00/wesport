<?php 
session_start();
unset($_SESSION['error']);
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
    <title>WeSport - Registrati</title>
</head>
<body>
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

    <form class="ctr-form" style="width:50%;" method="post" name="formregistrazione" onSubmit="return validaReg();" action="checkReg.php">
        <div>
            <div class="row justify-content-md-center">
                <div class="col-md-3 mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="inputname" placeholder="Name" onChange="retogglediv('invalidname'); retogglediv2('nome');">
                    <div id="invalidname" class="invalid-feedback" style="display: none;">
                        Inserire un nome
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="cognome">Email</label>
                    <input type="email" class="form-control" id="email" name="inputemail" placeholder="Email" onChange="retogglediv('invalidemail'); retogglediv2('email');">
                    <div id="invalidemail" class="invalid-feedback" style="display: none;">
                        Inserire una email
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            </div>
                            <input type="text" class="form-control" id="username" name="inputusername" placeholder="Username" aria-describedby="inputGroupPrepend3" onChange="retogglediv('invalidusername'); retogglediv2('username');">
                            <div id="invalidusername" class="invalid-feedback" style="display: none;">
                                Scegli un username
                            </div>
                         </div>
                    </div>
                 </div>
                 


            <div class="row justify-content-md-center">
                <div class="col-md-3 mb-3">
                    <label for="stato">Password</label>
                    <input type="password" class="form-control" id="password" name="inputpassword" placeholder="Password" onChange="retogglediv('invalidpassword'); retogglediv2('password');">
                    <div id="invalidpassword" class="invalid-feedback" style="display: none;">
                        Scegli una password
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cap">Ripeti password</label>
                    <input type="password" class="form-control" id="ripeti_password" placeholder="Password" onChange="retogglediv('invalidrippassword'); retogglediv2('ripeti_password');">
                    <div id="invalidrippassword" class="invalid-feedback" style="display: none;">
                        La password deve corrispondere!
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="male" name="sex" value="M" class="custom-control-input" checked>
                        <label class="custom-control-label" for="male">Uomo</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="female" name="sex" value="F" class="custom-control-input">
                        <label class="custom-control-label" for="female">Donna</label>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-md-center">
                <div class="col-md-3 mb-3">
                    <button class="btn btn-signup justify-content-md-center" name="submit" type="submit">Registrati</button>
                </div>
            </div>
</div>
</form>
    </div>

    <div>
    <div style="overflow-y: scroll; margin-top: 5%;" id="login-form-mobile" class="container-form fade-in-image">
            <div class="fade-in-image col-md-12 mb-3">
                <img id="logo" class="img-fluid" src="Fubles.png">
                <img id="logo-mobile" class="img-fluid" src="Fubles-mobile.png">
            </div>

    <form method="post" name="formregistrazione1" onSubmit="return validaReg1();" action="checkReg.php">
        <div>
            <div class="row justify-content-md-center">
                <div class="col-md-3 mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome1" name="inputname" placeholder="Name" onChange="retogglediv('invalidname1'); retogglediv2('nome1');">
                    <div id="invalidname1" class="invalid-feedback" style="display: none;">
                        Inserire un nome
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="cognome">Email</label>
                    <input type="email" class="form-control" id="email1" name="inputemail" placeholder="Email" onChange="retogglediv('invalidemail1'); retogglediv2('email1');">
                    <div id="invalidemail1" class="invalid-feedback" style="display: none;">
                        Inserire una email
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            </div>
                            <input type="text" class="form-control" id="username1" name="inputusername" placeholder="Username" aria-describedby="inputGroupPrepend3" onChange="retogglediv('invalidusername1'); retogglediv2('username1');">
                            <div id="invalidusername1" class="invalid-feedback" style="display: none;">
                                Scegli un username
                            </div>
                         </div>
                    </div>
                 </div>
                 


            <div class="row justify-content-md-center">
                <div class="col-md-3 mb-3">
                    <label for="stato">Password</label>
                    <input type="password" class="form-control" id="password1" name="inputpassword" placeholder="Password" onChange="retogglediv('invalidpassword1'); retogglediv2('password1');">
                    <div id="invalidpassword1" class="invalid-feedback" style="display: none;">
                        Scegli una password
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cap">Ripeti password</label>
                    <input type="password" class="form-control" id="ripeti_password1" placeholder="Password" onChange="retogglediv('invalidrippassword1'); retogglediv2('ripeti_password1');">
                    <div id="invalidrippassword1" class="invalid-feedback" style="display: none;">
                        La password deve corrispondere!
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="male" name="sex" value="M" class="custom-control-input" checked>
                        <label class="custom-control-label" for="male">Uomo</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="female" name="sex" value="F" class="custom-control-input">
                        <label class="custom-control-label" for="female">Donna</label>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-md-center">
                <div class="col-md-3 mb-3">
                    <button class="btn btn-signup justify-content-md-center" name="submit" type="submit">Registrati</button>
                </div>
            </div>
</div>  
        </form>
    </div>

    
    <div id="notsigned" style="height: 10%;">
        <div style="text-align:center; margin-top:3%;">
            Sei già iscritto?
            <a href="login.php"><button id="btn-login" type="button" class="btn btn-login btn-lg">Login</button></a>
        </div>
    </div>

    </div>

</body>
</html>