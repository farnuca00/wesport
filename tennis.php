<?php 
function mysqli_result($res, $row) { 
    $res->data_seek($row); 
    $datarow = $res->fetch_array(); 
    return $datarow[0]; 
} 
//header('Cache-Control: no cache'); //no cache
//session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
session_start();
$session = session_id();
$time = time();
$time_check = $time-300; 
$today = date("Y-m-d");
$checkdata = date("Y-m-d");


if(isset($_POST['aggiornadata'])) {
    $data1 = $_POST['setdata'];
}
else{
    $data1 = date("Y-m-d");
}

if(isset($_POST['submit'])){
    $checkdata = $_POST['inputdata'];
}

error_reporting(0);
ini_set('display_errors', 0);
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
    <title>WeSport - Tennis</title>
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

            echo '<a class="float-r" href="logout.php"><button type="button" class="btn btn-logout">Logout</button></a>'; 

            $sql = "SELECT * FROM $tbl_name WHERE session='$session'";
            $result = mysqli_query($dbconn, $sql);
            $count = mysqli_num_rows($result);

            if ($count == "0") {
                $sql1 = "INSERT INTO $tbl_name(session, time, username, afk) VALUES('$session', '$time', '$line[0]', 0)";
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
        <a id="brand-mobile" style="display: flex;" class="navbar-brand" href="index.php"><form action="homepage.php">
                    <button type="submit" class="navbar-brand" style="left: 10px; background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;"><i class="fas fa-home"></i></button>
                </form><img height="36" src="icon.png"></a>        <?php 
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
            <a id="tennis" onmouseout="hover_tennis('tennis_image')" onmouseover="hover_tennis('tennis_image');" href="tennis.php" class="w3-bar-item w3-button active"><img style="margin-left: 15%;" id="tennis_image" width="24px" height="24px" src="tennis-icon-white.png"> <b style="margin-left: 10%;">Tennis</b></a>
            <a id="basket" href="basket.php" class="w3-bar-item w3-button changecolor"><i class='fas fa-basketball-ball' style='font-size:24px; margin-left: 15%;'></i> <b style="margin-left: 10%;">Basket</b></a>
            <a href="profilo.php" id="profile" class="">
            <?php if(isset($_SESSION['inputemail']))
                if($online != 1){
                    echo '<form action="profilo.php" method="post"><button class="float-r btn-profile" type="submit" id="profile1" name="profile" value= ' . $line[0] . '><img src="offline.png" style="margin-top: 5px;" width=16><i style="padding: 10px;" class="far fa-user float-r"></i><p id="username" class="float-r username">' . $line[0] . '</p></button></form>';
                }
                else{
                    echo '<form action="profilo.php" method="post"><button class="float-r btn-profile" type="submit" id="profile1" name="profile" value= ' . $line[0] . '><img src="online.png" style="margin-top: 5px;" width=16><i style="padding: 10px;" class="far fa-user float-r"></i><p id="username" class="float-r username">' . $line[0] . '</p></button></form>';
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
          <a style="background-color: #959aa0;" class="nav-link changecolor" onmouseout="unhover_tennis('tennis_image')" onmouseover="hover_tennis('tennis_image');" href="tennis.php"><img style=" margin-top: 5%;" id="tennis_image" width="24px" height="24px" src="tennis-icon-white.png"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link changecolor" href="basket.php"><i class='fas fa-basketball-ball' style='font-size:24px; margin-top: 5%;'></i></a>
          </li>
      </ul>

      <a style="margin-left: 16%;" id="home-btn" href="homepage.php"><button type="button" class="btn btn-dark"><i class="fas fa-home"></i> Homepage</button></a>

      <?php
        $res = mysqli_query($dbconn, "SELECT ID FROM partita ORDER BY ID DESC LIMIT 1;");
        $val = mysqli_result($res, 0);
        $date = $_POST['inputdata'];
        $pitch = $_POST['inputpitch'];
        $hour = $_POST['inputhour'];
        $organizzatore = $line[0];
        if(isset($_POST['inputdata']) && $_POST['inputdata'] >= $today){
            $q2 = "insert into partita values ($val+1, 'Tennis', '$pitch', '$date', '$hour', '$organizzatore', 0)";
            $data = mysqli_query($dbconn, $q2);
            $show = 1;
            ?>
			<script type="text/javascript">
            	var load = setTimeout(function() {
					window.location.href = 'http://www.wesport.cloud/tennis.php';
                }, 5000);
			</script>
            <?php
        }

        $rs1 = mysqli_query($dbconn, "SELECT * FROM partita where data = '$data1' and sport='Tennis'") or die("Cannot execute query: $query\n");
        $rs2 = mysqli_query($dbconn, "SELECT * FROM partita where data = '$data1' and sport='Tennis'") or die("Cannot execute query: $query\n");

        $res = mysqli_query($dbconn, "SELECT count(ID) FROM partita where data = '$data1' and sport='Tennis'");
        $max = mysqli_result($res, 0);
      ?>

        <div id="sfondo" style="margin-left: 20%; margin-top: 2%;">
        <?php
            
            if($checkdata < $today) {
                echo '<div style="width:90%; margin-top: 10px;" class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Ops!</strong> Non puoi creare una partita per un giorno precedente alla data odierna.
                    </div>'; 
            }
            else{
                if($show == 1){
                    echo '<div style="width:90%;" class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Perfetto!</strong> Hai creato con successo una partita.
                          </div>';
                          header("location: calcio.php");
                }
            }
        ?>
            <div class="list-group">
                <div class="list-group-item flex-column align-items-start">
                    <div class="row">
                        <div class="col-5">
                            <form method="post" name="datepickerform" action="">
                                <div class="input-group date" id="datepicker">
                                    <button name="aggiornadata" type="submit" class="input-group-text" id="basic-addon1" disabled>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                        </svg>
                                    </button>
                                <input onChange="enable();" type="text" name="setdata" class="form-control" placeholder="<?php
                                                                                                    if(isset($_POST['aggiornadata'])) {
                                                                                                        echo $_POST['setdata'];
                                                                                                    } 
                                                                                                    else{
                                                                                                        echo date("Y-m-d");
                                                                                                    } 
                                                                                                    ?>" onfocus="(this.type='date')" onfocusout="(this.type='text')" id="datepicker"/>
                            </form>
                                <button type="button" id="crea" class="btn btn-warning float-r"><b>+ Crea Partita</b></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="elenco">                                                                                        
                <?php
                    if($max == 0){
                        echo '<div style="width:100%; margin-top: 10px;" class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Peccato!</strong> Non ci sono partite disponibili per questa data.
                              </div>';
                        echo '<img id="nomatch" width=500px; style="margin-left: 30%;" src="nomatch.png">';
                    }
                    else{
                        while ($row = mysqli_fetch_array($rs1, MYSQLI_NUM)) {
                            $id = $row[0];
                            $sport = $row[1];
                            $impianto = $row[2];
                            $data = $row[3];    
                            $orario = $row[4];
                            $organizzatore = $row[5];
                            $posti = $row[6];
                            $left = 2 - $posti;
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
                                  <h5 class="mb-1">' . $orario . '</h5>
                                  <p class="mb-1">' . $impianto . '</p>
                                  <small>' . 'Organizzatore: ' . '<b>' . $organizzatore. '</b>' . '</small>
                                  </button>
                                  </form>';       
                        }
                    }
                   
                ?>
            </div>
        </div>
    </div>

        <div id="sfondo1" style="margin-left: 10%; margin-top: 5%;">
        <?php
            
            if($checkdata < $today) {
                echo '<div style="width:90%; margin-top: 10px;" class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Ops!</strong> Non puoi creare una partita per un giorno precedente alla data odierna.
                    </div>'; 
            }
            else{
                if($show == 1){
                    echo '<div style="width:90%;" class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Perfetto!</strong> Hai creato con successo una partita.
                          </div>';
                          header("location: calcio.php");
                }
            }
        ?>
            <div id="elenco1" class="list-group">
                <div class="list-group-item flex-column align-items-start">
                    <div class="row">
                        <div>
                            <form method="post" name="datepickerform" action="">
                                <div class="input-group date" id="datepicker1">
                                    <button name="aggiornadata" type="submit" class="input-group-text" id="basic-addon11" disabled>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                        </svg>
                                    </button>
                                <input onChange="enable1();" type="text" name="setdata" class="form-control" placeholder="<?php
                                                                                                    if(isset($_POST['aggiornadata'])) {
                                                                                                        echo $_POST['setdata'];
                                                                                                    } 
                                                                                                    else{
                                                                                                        echo date("Y-m-d");
                                                                                                    } 
                                                                                                    ?>" onmouseover="(this.type='date')" onmouseout="(this.type='text')" id="datepicker1"/>
                            </form>
                                <button type="button" id="crea1" class="btn btn-warning float-r"><b>+ Crea Partita</b></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="elenco"> 
                <?php
                    if($max == 0){
                        echo '<div style="width:100%; margin-top: 10px;" class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Peccato!</strong> Non ci sono partite disponibili per questa data.
                              </div>';
                        echo '<img id="nomatch-mobile" width=200px; style="margin-left: 20%;" src="nomatch.png">';
                    }
                    else{
                        while ($row = mysqli_fetch_array($rs2, MYSQLI_NUM)) {
                            $id = $row[0];
                            $sport = $row[1];
                            $impianto = $row[2];
                            $data = $row[3];    
                            $orario = $row[4];
                            $organizzatore = $row[5];
                            $posti = $row[6];
                            $left = 2 - $posti;
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
                                  <h5 class="mb-1">' . $orario . '</h5>
                                  <p class="mb-1">' . $impianto . '</p>
                                  <small>' . 'Organizzatore: ' . '<b>' . $organizzatore. '</b>' . '</small>
                                  </button>
                                  </form>';       
                        }
                    }
                   
                ?>
            </div>
        </div>
    </div>

    <div id="creapartita">
            <div id="header" class="bg-secondary">
                <b>Crea Partita</b>
                <button type="button" id="close" class="btn-close float-r" aria-label="Close"></button>
            </div>
            <form method="post" name="formcreapartita" onSubmit="return validaCrea();" action="">
                <div class="form-group">
                    <label style="margin-left: 10%;" for="data">Data</label>
                    <input name="inputdata" type="date" style="width: 30%; margin-left: 10%;" class="form-control" id="data" onChange="retogglediv('invaliddate'); retogglediv2('data');">
                </div>
                <div style="margin-left: 10%; margin-bottom: 10px;" id="invaliddate" class="invalid-feedback" style="display: none;">
                    Scegli una data
                </div>
  
                <div class="form-group">
                    <label for="impianto" style="margin-left: 10%;">Campo sportivo</label>
                    <select name="inputpitch" id="impianto" style="width: 50%; margin-left: 10%;" class="form-control" onChange="retogglediv('invalidpitch'); retogglediv2('impianto');">
                    <option selected>Choose...</option>
                        <option>Circolo Tennis Belle Arti</option>
                        <option>Nuovo Tuscolo Sporting Club</option>
                        <option>Ssd Lazio Tennis</option>
                        <option>Tennis Sport Libero</option>
                        <option>Ads Circolo Sportivo Italia</option>
                        <option>Circolo Tennis Monte Mario</option>
                        <option>Tennis Roma A. S. D.</option>
                        <option>Tennis Club - ASD New F84</option>
                    </select>
                </div>
                <div style="margin-bottom: 10px; margin-left: 10%;" id="invalidpitch" class="invalid-feedback" style="display: none;">
                    Scegli un impianto
                </div>
                <div class="form-group">
                    <label for="orario" style="margin-left: 10%;">Orario</label>
                    <select name="inputhour" id="orario" style="width: 50%; margin-left: 10%; margin-bottom: 10px;" class="form-control" onChange="retogglediv('invalidhour'); retogglediv2('orario');">
                        <option selected>Choose...</option>
                        <option>07:00 - 08:00</option>
                        <option>08:00 - 09:00</option>
                        <option>09:00 - 10:00</option>
                        <option>10:00 - 11:00</option>
                        <option>11:00 - 12:00</option>
                        <option>12:00 - 13:00</option>
                        <option>13:00 - 14:00</option>
                        <option>14:00 - 15:00</option>
                        <option>15:00 - 16:00</option>
                        <option>16:00 - 17:00</option>
                        <option>17:00 - 18:00</option>
                        <option>18:00 - 19:00</option>
                        <option>19:00 - 20:00</option>
                        <option>20:00 - 21:00</option>
                        <option>21:00 - 22:00</option>
                        <option>22:00 - 23:00</option>
                        <option>23:00 - 00:00</option>
                    </select>
                </div>
                <div style="margin-bottom: 10px; margin-left: 10%;" id="invalidhour" class="invalid-feedback" style="display: none;">
                    Scegli un orario
                </div>
                <button name="submit" type="submit" style="width: 100px; margin-left: 10%; margin-bottom: 10px;" class="btn btn-primary">Crea</button>
                </div>
            </form>
        </div>

        <div id="creapartita1">
            <div id="header" class="bg-secondary">
                <b>Crea Partita</b>
                <button type="button" id="close1" class="btn-close float-r" aria-label="Close"></button>
            </div>
            <form method="post" name="formcreapartita1" onSubmit="return validaCrea_mobile();" action="">
                <div class="form-group">
                    <label style="margin-left: 10%;" for="data">Data</label>
                    <input name="inputdata" type="date" style="width: 30%; margin-left: 10%;" class="form-control" id="data1" onChange="retogglediv('invaliddate1'); retogglediv2('data1');">
                </div>
                <div style="margin-left: 10%; margin-bottom: 10px;" id="invaliddate1" class="invalid-feedback" style="display: none;">
                    Scegli una data
                </div>
  
                <div class="form-group">
                    <label for="impianto" style="margin-left: 10%;">Campo sportivo</label>
                    <select name="inputpitch" id="impianto1" style="width: 50%; margin-left: 10%;" class="form-control" onChange="retogglediv('invalidpitch1'); retogglediv2('impianto1');">
                    <option selected>Choose...</option>
                        <option>Circolo Tennis Belle Arti</option>
                        <option>Nuovo Tuscolo Sporting Club</option>
                        <option>Ssd Lazio Tennis</option>
                        <option>Tennis Sport Libero</option>
                        <option>Ads Circolo Sportivo Italia</option>
                        <option>Circolo Tennis Monte Mario</option>
                        <option>Tennis Roma A. S. D.</option>
                        <option>Tennis Club - ASD New F84</option>
                    </select>
                </div>
                <div style="margin-bottom: 10px; margin-left: 10%;" id="invalidpitch1" class="invalid-feedback" style="display: none;">
                    Scegli un impianto
                </div>
                <div class="form-group">
                    <label for="orario" style="margin-left: 10%;">Orario</label>
                    <select name="inputhour" id="orario" style="width: 50%; margin-left: 10%; margin-bottom: 10px;" class="form-control" onChange="retogglediv('invalidhour1'); retogglediv2('orario1');">
                        <option selected>Choose...</option>
                        <option>07:00 - 08:00</option>
                        <option>08:00 - 09:00</option>
                        <option>09:00 - 10:00</option>
                        <option>10:00 - 11:00</option>
                        <option>11:00 - 12:00</option>
                        <option>12:00 - 13:00</option>
                        <option>13:00 - 14:00</option>
                        <option>14:00 - 15:00</option>
                        <option>15:00 - 16:00</option>
                        <option>16:00 - 17:00</option>
                        <option>17:00 - 18:00</option>
                        <option>18:00 - 19:00</option>
                        <option>19:00 - 20:00</option>
                        <option>20:00 - 21:00</option>
                        <option>21:00 - 22:00</option>
                        <option>22:00 - 23:00</option>
                        <option>23:00 - 00:00</option>
                    </select>
                </div>
                <div style="margin-bottom: 10px; margin-left: 10%;" id="invalidhour" class="invalid-feedback" style="display: none;">
                    Scegli un orario
                </div>
                <button name="submit" type="submit" style="width: 100px; margin-left: 10%; margin-bottom: 10px;" class="btn btn-primary">Crea</button>
                </div>
            </form>
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

  $(".close").click(function () { 
    $(".alert").fadeOut(500);
  });

  $("#crea1").click(function () { 
    $("#creapartita1").fadeIn(500);
    $("#sfondo1").addClass("blur");
  });
  $("#close1").click(function () { 
    $("#creapartita1").fadeOut(500);
    $("#sfondo1").removeClass("blur");
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
  window.onload = function() {
	if(!window.location.hash) {
		window.location = window.location + '#loaded';
		window.location.reload();
	}
}
</script>

</body>
</html>