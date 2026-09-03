<?php 
function mysqli_result($res, $row) { 
    $res->data_seek($row); 
    $datarow = $res->fetch_array(); 
    return $datarow[0]; 
} 
session_start(); 

error_reporting(0);
ini_set('display_errors', 0);
$today = date("Y-m-d");

$session = null;

$host = "localhost";
$user = "avid3868345";
$database = "my_avid3868345";
$tbl_name  = "user_online";
$dbconn = mysqli_connect($host, $user, "", $database) or die("Errore durante la connessione al database");


$email = $_SESSION["inputemail"];
$q1 = "select username from users where email= '$email'";
$result = mysqli_query($dbconn, $q1);
$line = mysqli_fetch_row($result);

$q1= "SELECT count(session) from $tbl_name where username='$line[0]'";
$res = mysqli_query($dbconn, $q1);
$francy = mysqli_result($res, 0);
if($francy == 1){
    $q1= "SELECT session from $tbl_name where username='$line[0]'";
    $res = mysqli_query($dbconn, $q1);
    $session = mysqli_result($res, 0);
}
else{
    $session = session_id();
}
$time = time();
$time_check = $time-700; 
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "icon.png" type = "image/x-icon">
    <title>WeSport - Home</title>
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

            $sql = "SELECT * FROM $tbl_name WHERE session='$session'";
            $result = mysqli_query($dbconn, $sql);
            $count = mysqli_num_rows($result);

            if ($count == "0") {
                $sql1 = "INSERT INTO $tbl_name(session, time, username) VALUES('$session', '$time', '$line[0]')";
                $result1 = mysqli_query($dbconn, $sql1);
            } else {
                $sql2 = "UPDATE $tbl_name SET time='$time' WHERE session = '$session'";
                $result2 = mysqli_query($dbconn, $sql2);
            }

            $sql3 = "SELECT * FROM $tbl_name";
            $result3 = mysqli_query($dbconn, $sql3);
            $count_user_online = mysqli_num_rows($result3);

            echo '<div class="float-r"><button type="button" class="btn btn-success"><b>Users online: ' . $count_user_online . '</b></button></div>';

            // if over 10 minute, delete session 
            $sql4     = "DELETE FROM $tbl_name WHERE time<$time_check";
            $result4  = mysqli_query($dbconn, $sql4);

            $sql3 = "SELECT count(username) FROM $tbl_name where username = '$line[0]'";
            $result3 = mysqli_query($dbconn, $sql3);
            $online = mysqli_result($result3, 0);

        ?>

        </div>
    </div>

    <div id="nav-mobile" class="navbar navbar-dark bg-dark sticky-top">
        <a id="brand-mobile" class="navbar-brand" href="index.php"><img height="36" src="icon.png"></a>
        <?php 
        if($online != 1){
            echo '<div class="btn-group">
            <button type="button" class="btn btn-login dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="offline.png" width=16> ' . $line[0] . '
            </button>
            <div class="dropdown-menu">
              <form action="profilo.php" method="post"><a class="dropdown-item"><button type="submit" style="background: none;
              color: inherit;
              border: none;
              padding: 0;
              font: inherit;
              cursor: pointer;
              outline: inherit;" id="profile1" name="profile" value= ' . $line[0] . '>Profilo</button></a></form>
              <a class="dropdown-item" href="logout.php">Esci</a>
            </div>
          </div>';         }
        else{
            echo '<div class="btn-group">
            <button type="button" class="btn btn-login dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="online.png" width=16> ' . $line[0] . '
            </button>
            <div class="dropdown-menu">
            <form action="profilo.php" method="post"><a class="dropdown-item"><button type="submit" style="background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            outline: inherit;" id="profile1" name="profile" value= ' . $line[0] . '>Profilo</button></a></form>
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
                    echo '<form action="profilo.php" method="post"><button class="float-r btn-profile" type="submit" id="profile1" name="profile" value= ' . $line[0] . '><img src="offline.png" style="margin-top: 5px;" width=16><i style="padding: 10px;" class="far fa-user float-r"></i><p id="username" class="float-r username">' . $line[0] . '</p></button></form>';
                }
                else{
                    echo '<form action="profilo.php" method="post"><button class="float-r btn-profile" type="submit" id="profile1" name="profile" value= ' . $line[0] . '><img id="dot" src="online.png" style="margin-top: 5px;" width=16><i style="padding: 10px;" class="far fa-user float-r"></i><p id="username" class="float-r username">' . $line[0] . '</p></button></form>';
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

      <div id="sfondo" style="margin-left: 20%; margin-top: 2%; margin-right:5%">
      <?php
       echo '<h1><b>Benvenuto, ';
       echo $line[0];
       echo '!<br>';
       echo 'Scegli il tuo sport preferito, iscriviti e gioca!';
       echo '</b></h1>';
       ?>  
       <br>
        <div id="elenco" class="row">                                                                                        
                <?php
                    $rs1 = mysqli_query($dbconn, "SELECT * FROM partita p join giocatori g on p.id=g.idpartita where data >= '$today' and g.username='$line[0]'") or die("Cannot execute query: $query\n");
                    $rs0 = mysqli_query($dbconn, "SELECT count(p.id) FROM partita p join giocatori g on p.id=g.idpartita where data >= '$today' and g.username='$line[0]'") or die("Cannot execute query: $query\n");
                
                    echo '<div class="col-6">';
                    echo '<div class="list-group-item flex-column align-items-start"><b>Partite da giocare</b></div>';
                    $res=mysqli_result($rs0, 0);
                    if($res==0){
                        echo '<div style="width:100%; margin-top: 10px;" class="alert alert-danger alert-dismissible">
                                <strong>Non hai partite da giocare!</strong>
                              </div>';                     
                    }
                        while ($row = mysqli_fetch_array($rs1, MYSQLI_NUM)) {
                            $id = $row[0];
                            $sport = $row[1];
                            $impianto = $row[2];
                            $data = $row[3];    
                            $orario = $row[4];
                            $organizzatore = $row[5];
                            $posti = $row[6];
                            if($sport === 'Calcio a 5' || $sport === 'Basket'){
                                $left = 10 - $posti;
                            }
                            if($sport === 'Pallavolo'){
                                $left = 12 - $posti;
                            }
                            if($sport === 'Padel'){
                                $left = 4 - $posti;
                            }
                            if($sport === 'Tennis'){
                                $left = 2 - $posti;
                            }
                            echo '<form action="match.php?id=' . $id . '" method="post">
                                  <button name="id" type="submit" value="' . $id . '" class="list-group-item list-group-item-action flex-column align-items-start">
                                  <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">' . $sport . '</h5>';
                                    if($left != 0){
                                        echo '<span class="badge badge-primary badge-pill disponibili">Posti disponibili:' . $left . '</span>';    
                                    }
                                    else{
                                        echo '<span class="badge badge-red badge-pill disponibili">Posti terminati</span>';
                                    }
                            echo  '</div>
                                  <h5 class="mb-1">' . $data. ' alle ore '. $orario . '</h5>
                                  <p class="mb-1">' . $impianto . '</p>
                                  <small>' . 'Organizzatore: ' . '<b>' . $organizzatore. '</b>' . '</small>
                                  </button>
                                  </form>';       
                        }
                    echo '</div>';
        
                    $rs2 = mysqli_query($dbconn, "SELECT * FROM partita p  where data >= '$today' and p.organizzatore='$line[0]'") or die("Cannot execute query: $query\n");
                    $rs = mysqli_query($dbconn, "SELECT count(p.id) FROM partita p  where data >= '$today' and p.organizzatore='$line[0]'") or die("Cannot execute query: $query\n");
                    echo '<div class="col-6">';
                    echo '<div class="list-group-item flex-column align-items-start"><b>Partite organizzate</b></div>';
                    $res2=mysqli_result($rs, 0);
                    if($res2==0){
                        echo '<div style="width:100%; margin-top: 10px;" class="alert alert-danger alert-dismissible">
                                <strong>Non hai organizzato nessuna partita!</strong>
                              </div>';                     
                    }
                        while ($row = mysqli_fetch_array($rs2, MYSQLI_NUM)) {
                            $id = $row[0];
                            $sport = $row[1];
                            $impianto = $row[2];
                            $data = $row[3];    
                            $orario = $row[4];
                            $organizzatore = $row[5];
                            $posti = $row[6];
                            if($sport === 'Calcio a 5' || $sport === 'Basket'){
                                $left = 10 - $posti;
                            }
                            if($sport === 'Pallavolo'){
                                $left = 12 - $posti;
                            }
                            if($sport === 'Padel'){
                                $left = 4 - $posti;
                            }
                            if($sport === 'Tennis'){
                                $left = 2 - $posti;
                            }
                            echo '<form action="match.php?id=' . $id . '" method="post">
                                  <button name="id" type="submit" value="' . $id . '" class="list-group-item list-group-item-action flex-column align-items-start">
                                  <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">' . $sport . '</h5>';
                                    if($left != 0){
                                        echo '<span class="badge badge-primary badge-pill disponibili">Posti disponibili:' . $left . '</span>';    
                                    }
                                    else{
                                        echo '<span class="badge badge-red badge-pill disponibili">Posti terminati</span>';
                                    }
                            echo  '</div>
                                  <h5 class="mb-1">' . $data. ' alle ore '. $orario . '</h5>
                                  <p class="mb-1">' . $impianto . '</p>
                                  <small>' . 'Organizzatore: ' . '<b>' . $organizzatore. '</b>' . '</small>
                                  </button>
                                  </form>';       
                        }
                    echo '</div>';
                    if($res==0 && $res2==0){
                        echo '<img id="logo" width=500px; style="margin-left: 17%; margin-top: 8%; margin-right:20%" src="logo.png">';
                    }
            
                ?>
            </div>
        </div>
    </div>
        
    <div id="sfondo1" style="margin-left: 10%; margin-top: 2%; margin-right:10%">
      <?php
       echo '<h1 style="text-align: center;"><b>Benvenuto ';
       echo $line[0];
       echo '!<br>';
       echo '</b></h1>';
       ?>  
       <br>
        <div id="elenco" class="row">                                                                                        
                <?php
                    $rs1 = mysqli_query($dbconn, "SELECT * FROM partita p join giocatori g on p.id=g.idpartita where data >= '$today' and g.username='$line[0]'") or die("Cannot execute query: $query\n");
                    $rs0 = mysqli_query($dbconn, "SELECT count(p.id) FROM partita p join giocatori g on p.id=g.idpartita where data >= '$today' and g.username='$line[0]'") or die("Cannot execute query: $query\n");
                
                    echo '<div class="col-6">';
                    echo '<div class="list-group-item flex-column align-items-start"><b>Partite da giocare</b></div>';
                    $res=mysqli_result($rs0, 0);
                    if($res==0){
                        echo '<div style="width:100%; margin-top: 10px;" class="alert alert-danger alert-dismissible">
                                <strong>Non hai partite da giocare!</strong>
                              </div>';                     
                    }
                        while ($row = mysqli_fetch_array($rs1, MYSQLI_NUM)) {
                            $id = $row[0];
                            $sport = $row[1];
                            $impianto = $row[2];
                            $data = $row[3];    
                            $orario = $row[4];
                            $organizzatore = $row[5];
                            $posti = $row[6];
                            if($sport === 'Calcio a 5' || $sport === 'Basket'){
                                $left = 10 - $posti;
                            }
                            if($sport === 'Pallavolo'){
                                $left = 12 - $posti;
                            }
                            if($sport === 'Padel'){
                                $left = 4 - $posti;
                            }
                            if($sport === 'Tennis'){
                                $left = 2 - $posti;
                            }
                            echo '<form action="match.php?id=' . $id . '" method="post">
                                  <button name="id" type="submit" value="' . $id . '" class="list-group-item list-group-item-action flex-column align-items-start">
                                  <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">' . $sport . '</h5>';
                                    if($left != 0){
                                        echo '<span class="badge badge-primary badge-pill disponibili">' . $left . '</span>';    
                                    }
                                    else{
                                        echo '<span class="badge badge-red badge-pill disponibili">0</span>';
                                    }
                            echo  '</div>
                                  <h5 class="mb-1 h5">' . $data. ' '. $orario . '</h5>
                                  <p style="font-size: 3vw;" class="mb-1">' . $impianto . '</p>
                                  <small>' . 'Organizzatore: ' . '<b>' . $organizzatore. '</b>' . '</small>
                                  </button>
                                  </form>';       
                        }
                    echo '</div>';
        
                    $rs2 = mysqli_query($dbconn, "SELECT * FROM partita p  where data >= '$today' and p.organizzatore='$line[0]'") or die("Cannot execute query: $query\n");
                    $rs = mysqli_query($dbconn, "SELECT count(p.id) FROM partita p  where data >= '$today' and p.organizzatore='$line[0]'") or die("Cannot execute query: $query\n");
                    echo '<div class="col-6">';
                    echo '<div class="list-group-item flex-column align-items-start"><b>Partite organizzate</b></div>';
                    $res2=mysqli_result($rs, 0);
                    if($res2==0){
                        echo '<div style="width:100%; margin-top: 10px;" class="alert alert-danger alert-dismissible">
                                <strong>Non hai organizzato nessuna partita!</strong>
                              </div>';                     
                    }
                        while ($row = mysqli_fetch_array($rs2, MYSQLI_NUM)) {
                            $id = $row[0];
                            $sport = $row[1];
                            $impianto = $row[2];
                            $data = $row[3];    
                            $orario = $row[4];
                            $organizzatore = $row[5];
                            $posti = $row[6];
                            if($sport === 'Calcio a 5' || $sport === 'Basket'){
                                $left = 10 - $posti;
                            }
                            if($sport === 'Pallavolo'){
                                $left = 12 - $posti;
                            }
                            if($sport === 'Padel'){
                                $left = 4 - $posti;
                            }
                            if($sport === 'Tennis'){
                                $left = 2 - $posti;
                            }
                            echo '<form action="match.php?id=' . $id . '" method="post">
                                  <button name="id" type="submit" value="' . $id . '" class="list-group-item list-group-item-action flex-column align-items-start">
                                  <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">' . $sport . '</h5>';
                                    if($left != 0){
                                        echo '<span class="badge badge-primary badge-pill disponibili">' . $left . '</span>';    
                                    }
                                    else{
                                        echo '<span class="badge badge-red badge-pill disponibili">0</span>';
                                    }
                            echo  '</div>
                                  <h5 class="mb-1 h5">' . $data. ' '. $orario . '</h5>
                                  <p style="font-size: 3vw;" class="mb-1">' . $impianto . '</p>
                                  </button>
                                  </form>';       
                        }
                    echo '</div>';
                    if($res==0 && $res2==0){
                        echo '<img id="logo" width=500px; style="margin-left: 17%; margin-top: 8%; margin-right:20%" src="logo.png">';
                    }
            
                ?>
            </div>
        </div>
    </div>
                
  

    

<script>
    var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
  return new bootstrap.Dropdown(dropdownToggleEl)
})

    $("#crea").click(function () { 
    $("#creapartita").fadeIn(500);
    $("#sfondo").addClass("blur");
  });

  $("#close").click(function () { 
    $("#creapartita").fadeOut(500);
    $("#sfondo").removeClass("blur");
  });



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