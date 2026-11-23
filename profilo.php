<?php 
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
session_start();
$session = session_id();
$time = time();
$time_check = $time-300;  
?>

<?php error_reporting(0);
ini_set('display_errors', 0);
?>

<?php
            require_once 'db.php';
            $tbl_name  = "user_online";


            $email = $_SESSION["inputemail"];
            $result = q($dbconn, "select username from users where email= ?", [$email]);
            $line = mysqli_fetch_row($result);

            $res = q($dbconn, "SELECT count(session) from $tbl_name where username=?", [$line[0]]);
            $francy = mysqli_result($res, 0);
            if($francy == 1){
                $res = q($dbconn, "SELECT session from $tbl_name where username=?", [$line[0]]);
                $session = mysqli_result($res, 0);
            }
            else{
                $session = session_id();
            }
            $time = time();
            $time_check = $time-700; 
?>

<?php
    if(isset($_POST['profile1-1'])){
        $username = $_POST['profile1-1'];
    }
    if(isset($_POST['profile1-2'])){
        $username = $_POST['profile1-2'];
    }
    if(isset($_POST['profile1-3'])){
        $username = $_POST['profile1-3'];
    }
    if(isset($_POST['profile1-4'])){
        $username = $_POST['profile1-4'];
    }
    if(isset($_POST['profile1-5'])){
        $username = $_POST['profile1-5'];
    }
    if(isset($_POST['profile1-6'])){
        $username = $_POST['profile1-6'];
    }
    if(isset($_POST['profile2-1'])){
        $username = $_POST['profile2-1'];
    }
    if(isset($_POST['profile2-2'])){
        $username = $_POST['profile2-2'];
    }
    if(isset($_POST['profile2-3'])){
        $username = $_POST['profile2-3'];
    }
    if(isset($_POST['profile2-4'])){
        $username = $_POST['profile2-4'];
    }
    if(isset($_POST['profile2-5'])){
        $username = $_POST['profile2-5'];
    }
    if(isset($_POST['profile2-6'])){
        $username = $_POST['profile2-6'];
    }
    if(isset($_POST['profile'])){
        $username = $_POST['profile'];
    }
?>

<!DOCTYPE html>
<html lang="html">
<head>
    <meta charset="UTF-8">
    <script src="script.js"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b5ef527e87.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "icon.png" type = "image/x-icon">
    <title>WeSport - <?php echo e($username) ?></title>
</head>
<body style="background-color: #61C2A2">

    <?php
        if(!(isset($_SESSION['inputemail']))) {
            header("Location: index.php");
        }
    ?>

    <div id="nav" class="navbar navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="index.php"><img height="36" src="logo.png"></a>
        <?php if(!isset($_SESSION['inputemail']))
            echo '<a href="registrazione.php"><button type="button" class="btn btn-login float-r">Registrati</button></a>
            <a href="login.php"><button type="button" class="btn btn-signup float-r">Login</button></a>'
        ?>  

        <?php 
            echo '<a class="float-r" href="logout.php"><button type="button" class="btn btn-logout">Logout</button></a>'; 

            $result = q($dbconn, "SELECT * FROM $tbl_name WHERE session=?", [$session]);
            $count = mysqli_num_rows($result);

            if ($count == "0") {
                $result1 = q($dbconn, "INSERT INTO $tbl_name(session, time, username) VALUES(?, ?, ?)", [$session, $time, $line[0]]);
            } else {
                $result2 = q($dbconn, "UPDATE $tbl_name SET time=? WHERE session = ?", [$time, $session]);
            }

            $sql3 = "SELECT * FROM $tbl_name";
            $result3 = mysqli_query($dbconn, $sql3);
            $count_user_online = mysqli_num_rows($result3);

            echo '<div class="float-r"><button type="button" class="btn btn-success"><b>Users online: ' . $count_user_online . '</b></button></div>';

            // if over 10 minute, delete session 
            $result4 = q($dbconn, "DELETE FROM $tbl_name WHERE time<?", [$time_check]);

            $result3 = q($dbconn, "SELECT count(username) FROM $tbl_name where username = ?", [$line[0]]);
            $online = mysqli_result($result3, 0);

            $result3 = q($dbconn, "SELECT count(username) FROM $tbl_name where username = ?", [$username]);
            $onlineother = mysqli_result($result3, 0);

            $result3 = q($dbconn, "SELECT count(username) FROM $tbl_name where username = ? and afk=1", [$username]);
            $afk = mysqli_result($result3, 0);
        ?> 

        </div>
    </div>

    <div id="nav-mobile" class="navbar navbar-dark bg-dark sticky-top">
        <a id="brand-mobile" style="display: flex;" class="navbar-brand" href="index.php"><form action="javascript:history.go(-1)" method="post">
                    <button type="submit" class="navbar-brand" id="back" name="back" value="" onclick="value();" style="left: 10px; background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;"><i class="fa-solid fa-arrow-left"></i></button>
                </form><img height="36" src="icon.png"></a>
        <?php 
        if($online != 1){
            echo '<div class="btn-group">
            <button type="button" class="btn btn-login dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="offline.png" width=16> ' . e($line[0]) . '
            </button>
            <div class="dropdown-menu">
              <form action="profilo.php" method="post"><a class="dropdown-item"><button type="submit" style="background: none;
              color: inherit;
              border: none;
              padding: 0;
              font: inherit;
              cursor: pointer;
              outline: inherit;" id="profile1" name="profile" value="' . e($line[0]) . '">Profilo</button></a></form>
              <a class="dropdown-item" href="logout.php">Esci</a>
            </div>
          </div>';         }
        else{
            echo '<div class="btn-group">
            <button type="button" class="btn btn-login dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="online.png" width=16> ' . e($line[0]) . '
            </button>
            <div class="dropdown-menu">
            <form action="profilo.php" method="post"><a class="dropdown-item"><button type="submit" style="background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            outline: inherit;" id="profile1" name="profile" value="' . e($line[0]) . '">Profilo</button></a></form>
            <a class="dropdown-item" href="logout.php">Esci</a>
            </div>
          </div>';         }
        ?>

        </div>
    </div>

        <div id="side" class="w3-sidebar w3-bar-block w3-dark" style="width:15%;">
            <!--<h3 class="w3-bar-item" style="text-align: center;">SPORT</h3>-->
            <a id="calcio" href="calcio.php" class="w3-bar-item w3-button changecolor"><i style='font-size:24px; margin-left: 15%;' class='far'>&#xf1e3;</i> <b style="margin-left: 10%;">Calcio a 5</b></a>
            <a id="pallavolo" href="pallavolo.php" class="w3-bar-item w3-button changecolor"><i class='fas fa-volleyball-ball' style='font-size:24px; margin-left: 15%;'></i> <b style="margin-left: 10%;">Pallavolo</b></a>
            <a id="padel" onmouseout="unhover_padel('padel_image')" onmouseover="hover_padel('padel_image');" href="padel.php" class="w3-bar-item w3-button changecolor"><img style="margin-left: 15%;" id="padel_image" width="24px" height="24px" src="padel-icon-white.png"> <b style="margin-left: 10%;">Padel</b></a>
            <a id="tennis" onmouseout="unhover_tennis('tennis_image')" onmouseover="hover_tennis('tennis_image');" href="tennis.php" class="w3-bar-item w3-button changecolor"><img style="margin-left: 15%;" id="tennis_image" width="24px" height="24px" src="tennis-icon-white.png"> <b style="margin-left: 10%;">Tennis</b></a>
            <a id="basket" href="basket.php" class="w3-bar-item w3-button changecolor"><i class='fas fa-basketball-ball' style='font-size:24px; margin-left: 15%;'></i> <b style="margin-left: 10%;">Basket</b></a>
            <a href="profilo.php" id="profile" class="">
            <?php if(isset($_SESSION['inputemail']))
                if($online != 1){
                    echo '<form action="profilo.php" method="post"><button class="float-r btn-profile" type="submit" id="profile1" name="profile" value="' . e($line[0]) . '"><img src="offline.png" style="margin-top: 5px;" width=16><i style="padding: 10px;" class="far fa-user float-r"></i><p id="username" class="float-r username">' . e($line[0]) . '</p></button></form>';
                }
                else{
                    echo '<form action="profilo.php" method="post"><button class="float-r btn-profile" type="submit" id="profile1" name="profile" value="' . e($line[0]) . '"><img id="dot" src="online.png" style="margin-top: 5px;" width=16><i style="padding: 10px;" class="far fa-user float-r"></i><p id="username" class="float-r username">' . e($line[0]) . '</p></button></form>';
                }
            ?>
            </a>
        </div>

        <ul id="side-mobile" class="nav nav-fill bg-dark justify-content-center">
        <li class="nav-item">
          <a class="nav-link changecolor" href="calcio.php"><i style='font-size:24px; margin-top: 5%;' class='far'>&#xf1e3;</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link changecolor" href="pallavolo.php"><i class='fas fa-volleyball-ball' style='font-size:24px;  margin-top: 5%;'></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link changecolor" onmouseout="unhover_padel('padel_image')" onmouseover="hover_padel('padel_image');" href="padel.php"><img style=" margin-top: 5%;" id="padel_image" width="24px" height="24px" src="padel-icon-white.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link changecolor" onmouseout="unhover_tennis('tennis_image')" onmouseover="hover_tennis('tennis_image');" href="tennis.php"><img style=" margin-top: 5%;" id="tennis_image" width="24px" height="24px" src="tennis-icon-white.png"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link changecolor" href="basket.php"><i class='fas fa-basketball-ball' style='font-size:24px; margin-top: 5%;'></i></a>
          </li>
      </ul>

        <?php
            $previous = "javascript:history.go(-1)";
            if(isset($_SERVER['HTTP_REFERER'])) {
                $previous = $_SERVER['HTTP_REFERER'];
            }
        ?>
        
        <form action="javascript:history.go(-1)" method="post">
            <button id="home-btn" type="submit" id="back" name="back" value="" onclick="value();" style="margin-left: 16%; margin-top: 20px;" class="btn btn-dark"><i class="fas fa-arrow-left"></i> Indietro</button>
        </form>

        <div id="profilo" style="min-width: 315px;">
            <div id="header" class="bg-secondary">
                <b>Profilo di <?php 
                                if($onlineother != 1){
                                    echo e($username) . ' <img src="offline.png" width=16>';
                                }
                                else if($afk == 1){
                                    echo e($username) . ' <img src="afk.png" width=16>';
                                }
                                else{
                                    echo e($username) . ' <img src="online.png" width=16>';
                                }
                              ?></b>
            </div>
                    <?php

                    /*echo 'PARTITE GIOCATE PER OGNI SPORT';
                    echo '<br>';*/

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Pallavolo' AND g.username=?", [$username]);
                    $max6 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Calcio a 5' AND g.username=?", [$username]);
                    $max7 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Padel' AND g.username=?", [$username]);
                    $max8 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Tennis' AND g.username=?", [$username]);
                    $max9 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Basket' AND g.username=?", [$username]);
                    $max10 = mysqli_result($res, 0);

                    /*echo '<br>';
                    echo 'PARTITE ORGANIZZATE PER OGNI SPORT';
                    echo '<br>';*/

                    $res = q($dbconn, "SELECT count(p.organizzatore) FROM partita p WHERE p.sport='Pallavolo' AND p.organizzatore=?", [$username]);
                    $max1 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(p.organizzatore) FROM partita p WHERE p.sport='Calcio a 5' AND p.organizzatore=?", [$username]);
                    $max2 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(p.organizzatore) FROM partita p WHERE p.sport='Padel' AND p.organizzatore=?", [$username]);
                    $max3 = mysqli_result($res, 0);
                    
                    $res = q($dbconn, "SELECT count(p.organizzatore) FROM partita p WHERE p.sport='Basket' AND p.organizzatore=?", [$username]);
                    $max4 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(p.organizzatore) FROM partita p WHERE p.sport='Tennis' AND p.organizzatore=?", [$username]);
                    $max5 = mysqli_result($res, 0);
                    
                    /*echo '<br>';
                    echo 'PARTITE ORGANIZZATE COMPLESSIVE: ' . $max1+$max2+$max3+$max4+$max5;
                    echo '<br>';

                    echo '<br>';
                    echo 'PARTITE GIOCATE COMPLESSIVE: ' . $max6+$max7+$max8+$max9+$max10;
                    echo '<br>';*/

                    $friend = 'Amico di ' . $username;

                    /*echo '<br>';
                    echo 'PARTITE GIOCATE DA AMICI PER OGNI SPORT';
                    echo '<br>';*/

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Pallavolo' AND g.username=?", [$friend]);
                    $max11 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Calcio a 5' AND g.username=?", [$friend]);
                    $max12 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Padel' AND g.username=?", [$friend]);
                    $max13 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Tennis' AND g.username=?", [$friend]);
                    $max14 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Basket' AND g.username=?", [$friend]);
                    $max15 = mysqli_result($res, 0);
                    

                    /*echo '<br>';
                    echo 'PARTITE GIOCATE DA AMICI COMPLESSIVE: ' . $max11+$max12+$max13+$max14+$max15;
                    echo '<br>';*/

                    echo '<div class="table-responsive"><table class="table table-bordered">
                        <thead>
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">Partite giocate</th>
                        <th scope="col">Partite organizzate</th>
                        <th scope="col">Partite giocate da amici</th>
                    </tr>
                </thead>
            <tbody>
                    <tr>
                    <th scope="row"><div style="text-align: left"><i style="font-size:24px" class="far">&#xf1e3;</i>   Calcio a 5</div></th>';
                        echo '<td>';
                        echo $max7;
                        echo '</td>';
                        echo '<td>';
                        echo $max2;
                        echo '</td>';
                        echo '<td>';
                        echo $max12;
                        echo '</td>';
                    echo '</tr>
                    <tr>
                        <th scope="row"><div style="text-align: left"><i style="font-size:24px" class="fas">&#xf45f;</i>   Pallavolo </div></th>';
                        echo '<td>';
                        echo $max6;
                        echo '</td>';
                        echo '<td>';
                        echo $max1;
                        echo '</td>';
                        echo '<td>';
                        echo $max11;
                        echo '</td>';
                    echo '</tr>
                    <tr>
                        <th scope="row"><div style="text-align: left"><img src="padel-icon.png" width="30px" height="30px" alt="Padel">Padel</div></th>';
                        echo '<td>';
                        echo $max8;
                        echo '</td>';
                        echo '<td>';
                        echo $max3;
                        echo '</td>';
                        echo '<td>';
                        echo $max13;
                        echo '</td>';
                    echo '</tr>
                    <tr>
                        <th scope="row"><div style="text-align: left"><img src="tennis-icon.png" width="26px" height="26px" alt="Tennis">   Tennis</div></th>';
                        echo '<td>';
                        echo $max9;
                        echo '</td>';
                        echo '<td>';
                        echo $max5;
                        echo '</td>';
                        echo '<td>';
                        echo $max14;
                        echo '</td>';
                    echo '</tr>
                    <tr>
                        <th scope="row"><div style="text-align: left"><i style="font-size:24px" class="fas">&#xf434;</i>   Basket</div></th>';
                        echo '<td>';
                        echo $max10;
                        echo '</td>';
                        echo '<td>';
                        echo $max4;
                        echo '</td>';
                        echo '<td>';
                        echo $max15;
                        echo '</td>';
                    echo '</tr>
                    <tr>
                        <th scope="row"><div style="text-align: left"><i style="font-size:20px" class="fa">&#xf091;</i><b>   Totali</b></div></th>';
                        echo '<td>';
                        echo $max6+$max7+$max8+$max9+$max10;
                        echo '</td>';
                        echo '<td>';
                        echo $max1+$max2+$max3+$max4+$max5;
                        echo '</td>';
                        echo '<td>';
                        echo $max11+$max12+$max13+$max14+$max15;
                        echo '</td>';
                    echo '</tr>
            </tbody>
        </table></div>';
                    ?>
        </div>

        <div id="profilo-mobile" style="min-width: 315px;">
            <div id="header" class="bg-secondary">
                <b>Profilo di <?php 
                                if($onlineother != 1){
                                    echo e($username) . ' <img src="offline.png" width=16>';
                                }
                                else if($afk == 1){
                                    echo e($username) . ' <img src="afk.png" width=16>';
                                }
                                else{
                                    echo e($username) . ' <img src="online.png" width=16>';
                                }
                              ?></b>
            </div>
                    <?php

                    /*echo 'PARTITE GIOCATE PER OGNI SPORT';
                    echo '<br>';*/

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Pallavolo' AND g.username=?", [$username]);
                    $max6 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Calcio a 5' AND g.username=?", [$username]);
                    $max7 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Padel' AND g.username=?", [$username]);
                    $max8 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Tennis' AND g.username=?", [$username]);
                    $max9 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Basket' AND g.username=?", [$username]);
                    $max10 = mysqli_result($res, 0);

                    /*echo '<br>';
                    echo 'PARTITE ORGANIZZATE PER OGNI SPORT';
                    echo '<br>';*/

                    $res = q($dbconn, "SELECT count(p.organizzatore) FROM partita p WHERE p.sport='Pallavolo' AND p.organizzatore=?", [$username]);
                    $max1 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(p.organizzatore) FROM partita p WHERE p.sport='Calcio a 5' AND p.organizzatore=?", [$username]);
                    $max2 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(p.organizzatore) FROM partita p WHERE p.sport='Padel' AND p.organizzatore=?", [$username]);
                    $max3 = mysqli_result($res, 0);
                    
                    $res = q($dbconn, "SELECT count(p.organizzatore) FROM partita p WHERE p.sport='Basket' AND p.organizzatore=?", [$username]);
                    $max4 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(p.organizzatore) FROM partita p WHERE p.sport='Tennis' AND p.organizzatore=?", [$username]);
                    $max5 = mysqli_result($res, 0);
                    
                    /*echo '<br>';
                    echo 'PARTITE ORGANIZZATE COMPLESSIVE: ' . $max1+$max2+$max3+$max4+$max5;
                    echo '<br>';

                    echo '<br>';
                    echo 'PARTITE GIOCATE COMPLESSIVE: ' . $max6+$max7+$max8+$max9+$max10;
                    echo '<br>';*/

                    $friend = 'Amico di ' . $username;

                    /*echo '<br>';
                    echo 'PARTITE GIOCATE DA AMICI PER OGNI SPORT';
                    echo '<br>';*/

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Pallavolo' AND g.username=?", [$friend]);
                    $max11 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Calcio a 5' AND g.username=?", [$friend]);
                    $max12 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Padel' AND g.username=?", [$friend]);
                    $max13 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Tennis' AND g.username=?", [$friend]);
                    $max14 = mysqli_result($res, 0);

                    $res = q($dbconn, "SELECT count(g.username) FROM giocatori g JOIN partita p ON g.idpartita=p.id WHERE p.sport='Basket' AND g.username=?", [$friend]);
                    $max15 = mysqli_result($res, 0);
                    

                    /*echo '<br>';
                    echo 'PARTITE GIOCATE DA AMICI COMPLESSIVE: ' . $max11+$max12+$max13+$max14+$max15;
                    echo '<br>';*/

                    echo '<div class="table-responsive"><table class="table table-bordered">
                        <thead>
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">Partite giocate</th>
                        <th scope="col">Partite organizzate</th>
                        <th scope="col">Partite giocate da amici</th>
                    </tr>
                </thead>
            <tbody>
                    <tr>
                    <th scope="row"><div style="text-align: left"><i style="font-size:24px" class="far">&#xf1e3;</i>   Calcio a 5</div></th>';
                        echo '<td>';
                        echo $max7;
                        echo '</td>';
                        echo '<td>';
                        echo $max2;
                        echo '</td>';
                        echo '<td>';
                        echo $max12;
                        echo '</td>';
                    echo '</tr>
                    <tr>
                        <th scope="row"><div style="text-align: left"><i style="font-size:24px" class="fas">&#xf45f;</i>   Pallavolo </div></th>';
                        echo '<td>';
                        echo $max6;
                        echo '</td>';
                        echo '<td>';
                        echo $max1;
                        echo '</td>';
                        echo '<td>';
                        echo $max11;
                        echo '</td>';
                    echo '</tr>
                    <tr>
                        <th scope="row"><div style="text-align: left"><img src="padel-icon.png" width="30px" height="30px" alt="Padel">Padel</div></th>';
                        echo '<td>';
                        echo $max8;
                        echo '</td>';
                        echo '<td>';
                        echo $max3;
                        echo '</td>';
                        echo '<td>';
                        echo $max13;
                        echo '</td>';
                    echo '</tr>
                    <tr>
                        <th scope="row"><div style="text-align: left"><img src="tennis-icon.png" width="26px" height="26px" alt="Tennis">   Tennis</div></th>';
                        echo '<td>';
                        echo $max9;
                        echo '</td>';
                        echo '<td>';
                        echo $max5;
                        echo '</td>';
                        echo '<td>';
                        echo $max14;
                        echo '</td>';
                    echo '</tr>
                    <tr>
                        <th scope="row"><div style="text-align: left"><i style="font-size:24px" class="fas">&#xf434;</i>   Basket</div></th>';
                        echo '<td>';
                        echo $max10;
                        echo '</td>';
                        echo '<td>';
                        echo $max4;
                        echo '</td>';
                        echo '<td>';
                        echo $max15;
                        echo '</td>';
                    echo '</tr>
                    <tr>
                        <th scope="row"><div style="text-align: left"><i style="font-size:20px" class="fa">&#xf091;</i><b>   Totali</b></div></th>';
                        echo '<td>';
                        echo $max6+$max7+$max8+$max9+$max10;
                        echo '</td>';
                        echo '<td>';
                        echo $max1+$max2+$max3+$max4+$max5;
                        echo '</td>';
                        echo '<td>';
                        echo $max11+$max12+$max13+$max14+$max15;
                        echo '</td>';
                    echo '</tr>
            </tbody>
        </table></div>';
                    ?>
        </div>

    <script>
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
        var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl)
        })
        
        var uno = document.getElementById('username');
        var username = uno.innerText;
        var datauser = 'user=' + username;

        var timeout;
        document.onmousemove = function(){
            document.getElementById("dot").src = "online.png";
            notafk();
            clearTimeout(timeout);
            timeout = setTimeout(function(){
                document.getElementById("dot").src = "afk.png";
                vaiafk();
            }, 600000);
        }

        function vaiafk() {
            $.ajax({
                    type: "POST",
                    url: "afk.php",
                    data: datauser,
                    datatype: 'json',
                    success: function(response) {
                        alert("Sei andato afk");
                    }
                });
        }
    
        function notafk() {
            $.ajax({
                    type: "POST",
                    url: "notafk.php",
                    data: datauser,
                    datatype: 'json',
                    success: function(response) {
                    }
                });
        }

    </script>

</body>
</html>