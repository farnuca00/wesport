<?php
function mysqli_result($res, $row) { 
    $res->data_seek($row); 
    $datarow = $res->fetch_array(); 
    return $datarow[0]; 
} 
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
session_start();
$session = session_id();
$time = time();
$time_check = $time-700; 
?>
<script>
    const params = new URLSearchParams(window.location.search);
    var id = params.get('id');
</script>

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
    <title>WeSport - Match</title>
</head>
<body style="background-color: #61C2A2">

    <?php
if(isset($_POST['submit1-1'])){
    $id = $_POST['submit1-1'];
}
if(isset($_POST['submit1-2'])){
    $id = $_POST['submit1-2'];
}
if(isset($_POST['submit1-3'])){
    $id = $_POST['submit1-3'];
}
if(isset($_POST['submit1-4'])){
    $id = $_POST['submit1-4'];
}
if(isset($_POST['submit1-5'])){
    $id = $_POST['submit1-5'];
}
if(isset($_POST['submit1-6'])){
    $id = $_POST['submit1-6'];
}
if(isset($_POST['submit2-1'])){
    $id = $_POST['submit2-1'];
}
if(isset($_POST['submit2-2'])){
    $id = $_POST['submit2-2'];
}
if(isset($_POST['submit2-3'])){
    $id = $_POST['submit2-3'];
}
if(isset($_POST['submit2-4'])){
    $id = $_POST['submit2-4'];
}
if(isset($_POST['submit2-5'])){
    $id = $_POST['submit2-5'];
}
if(isset($_POST['submit2-6'])){
    $id = $_POST['submit2-6'];
}
if(isset($_POST['submit1-1f'])){
    $id = $_POST['submit1-1f'];
}
if(isset($_POST['submit1-2f'])){
    $id = $_POST['submit1-2f'];
}
if(isset($_POST['submit1-3f'])){
    $id = $_POST['submit1-3f'];
}
if(isset($_POST['submit1-4f'])){
    $id = $_POST['submit1-4f'];
}
if(isset($_POST['submit1-5f'])){
    $id = $_POST['submit1-5f'];
}
if(isset($_POST['submit1-6f'])){
    $id = $_POST['submit1-6f'];
}
if(isset($_POST['submit2-1f'])){
    $id = $_POST['submit2-1f'];
}
if(isset($_POST['submit2-2f'])){
    $id = $_POST['submit2-2f'];
}
if(isset($_POST['submit2-3f'])){
    $id = $_POST['submit2-3f'];
}
if(isset($_POST['submit2-4f'])){
    $id = $_POST['submit2-4f'];
}
if(isset($_POST['submit2-5f'])){
    $id = $_POST['submit2-5f'];
}
if(isset($_POST['submit2-6f'])){
    $id = $_POST['submit2-6f'];
}
if(isset($_POST['submit1-1a'])){
    $id = $_POST['submit1-1a'];
}
if(isset($_POST['submit1-2a'])){
    $id = $_POST['submit1-2a'];
}
if(isset($_POST['submit1-3a'])){
    $id = $_POST['submit1-3a'];
}
if(isset($_POST['submit1-4a'])){
    $id = $_POST['submit1-4a'];
}
if(isset($_POST['submit1-5a'])){
    $id = $_POST['submit1-5a'];
}
if(isset($_POST['submit1-6a'])){
    $id = $_POST['submit1-6a'];
}
if(isset($_POST['submit2-1a'])){
    $id = $_POST['submit2-1a'];
}
if(isset($_POST['submit2-2a'])){
    $id = $_POST['submit2-2a'];
}
if(isset($_POST['submit2-3a'])){
    $id = $_POST['submit2-3a'];
}
if(isset($_POST['submit2-4a'])){
    $id = $_POST['submit2-4a'];
}
if(isset($_POST['submit2-5a'])){
    $id = $_POST['submit2-5a'];
}
if(isset($_POST['submit2-6a'])){
    $id = $_POST['submit2-6a'];
}
if(isset($_POST['back'])){
    $id = $_POST['back'];
}
if(isset($_POST['id'])){
    $id = $_POST['id'];
}
?>

    <?php
        if(!(isset($_SESSION['inputemail']))) {
            header("Location: index.php");
        }
    ?>

    <div style="z-index: 9998;" id="nav" class="navbar navbar-dark bg-dark sticky-top">
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

            $sql3 = "SELECT count(username) FROM $tbl_name where username = '$line[0]' and afk=1";
            $result3 = mysqli_query($dbconn, $sql3);
            $afk = mysqli_result($result3, 0);

?>
        </div>
    </div>

    <div style="z-index: 9998;" id="nav-mobile" class="navbar navbar-dark bg-dark sticky-top">
        <a id="brand-mobile" style="display: flex;" class="navbar-brand" href="index.php"><form action="homepage.php">
                    <button type="submit" class="navbar-brand" id="back" name="back" value="" onclick="value();" style="left: 10px; margin-top:5px; background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;"><i class="fas fa-home"></i></button>
                </form><img height="36" src="icon.png"></a>
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

        <?php
            $res1 = mysqli_query($dbconn, "SELECT distinct max(codice) FROM giocatori");
            $val = mysqli_result($res1, 0);
            $amico = 'Amico di ' . $line[0];

            $res0 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=1");
            $max = mysqli_result($res0, 0);
            if(isset($_POST['submit1-1']) && $max==0) {
                $nodouble = mysqli_query($dbconn, "SELECT count(username) FROM giocatori where idpartita=$id and username='$line[0]'");
                $pablo = mysqli_result($nodouble, 0);
                if($pablo == 0){
                    $query = "insert into giocatori values ($id, $val+1, '$line[0]', 1)";
                    $data = mysqli_query($dbconn, $query);
                }
            }
            if(isset($_POST['submit1-1f']) && $max==0){
                $query = "insert into giocatori values ($id, $val+1, '$amico', 1)";
                $data = mysqli_query($dbconn, $query);
            }
            if(isset($_POST['submit1-1a']) && $max==1){
                $query = "delete from giocatori where idpartita=$id and posizione= 1";
                $data = mysqli_query($dbconn, $query);
            }
        ?>

        <?php
            $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=2");
            $max = mysqli_result($res2, 0);
            if(isset($_POST['submit1-2']) && $max==0) {
                $nodouble = mysqli_query($dbconn, "SELECT count(username) FROM giocatori where idpartita=$id and username='$line[0]'");
                $pablo = mysqli_result($nodouble, 0);
                if($pablo == 0){
                    $query = "insert into giocatori values ($id, $val+1, '$line[0]', 2)";
                    $data = mysqli_query($dbconn, $query);
                }
            }
            if(isset($_POST['submit1-2f']) && $max==0){
                $query = "insert into giocatori values ($id, $val+1, '$amico', 2)";
                $data = mysqli_query($dbconn, $query);
            }
            if(isset($_POST['submit1-2a']) && $max==1){
                $query = "delete from giocatori where idpartita=$id and posizione= 2";
                 $data = mysqli_query($dbconn, $query);
            }
        ?>

        <?php
            $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=3");
            $max = mysqli_result($res2, 0);
            if(isset($_POST['submit1-3']) && $max==0) {
                $nodouble = mysqli_query($dbconn, "SELECT count(username) FROM giocatori where idpartita=$id and username='$line[0]'");
                $pablo = mysqli_result($nodouble, 0);
                if($pablo == 0){
                    $query = "insert into giocatori values ($id, $val+1, '$line[0]', 3)";
                    $data = mysqli_query($dbconn, $query);
                }
            }
            if(isset($_POST['submit1-3f']) && $max==0){
                $query = "insert into giocatori values ($id, $val+1, '$amico', 3)";
                 $data = mysqli_query($dbconn, $query);
            }
            if(isset($_POST['submit1-3a']) && $max==1){
                $query = "delete from giocatori where idpartita=$id and posizione= 3";
                 $data = mysqli_query($dbconn, $query);
            }
        ?>

        <?php
            $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=4");
            $max = mysqli_result($res2, 0);
            if(isset($_POST['submit1-4']) && $max==0) {
                $nodouble = mysqli_query($dbconn, "SELECT count(username) FROM giocatori where idpartita=$id and username='$line[0]'");
                $pablo = mysqli_result($nodouble, 0);
                if($pablo == 0){
                    $query = "insert into giocatori values ($id, $val+1, '$line[0]', 4)";
                    $data = mysqli_query($dbconn, $query);
                }
            }
            if(isset($_POST['submit1-4f']) && $max==0){
                $query = "insert into giocatori values ($id, $val+1, '$amico', 4)";
                 $data = mysqli_query($dbconn, $query);
            }
            if(isset($_POST['submit1-4a']) && $max==1){
                $query = "delete from giocatori where idpartita=$id and posizione= 4";
                 $data = mysqli_query($dbconn, $query);
            }
        ?>

        <?php
            $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=5");
            $max = mysqli_result($res2, 0);
            if(isset($_POST['submit1-5']) && $max==0) {
                $nodouble = mysqli_query($dbconn, "SELECT count(username) FROM giocatori where idpartita=$id and username='$line[0]'");
                $pablo = mysqli_result($nodouble, 0);
                if($pablo == 0){
                    $query = "insert into giocatori values ($id, $val+1, '$line[0]', 5)";
                    $data = mysqli_query($dbconn, $query);
                }
            }
            if(isset($_POST['submit1-5f']) && $max==0){
                $query = "insert into giocatori values ($id, $val+1, '$amico', 5)";
                 $data = mysqli_query($dbconn, $query);
            }
            if(isset($_POST['submit1-5a']) && $max==1){
                $query = "delete from giocatori where idpartita=$id and posizione= 5";
                 $data = mysqli_query($dbconn, $query);
            }
        ?>

        <?php
            $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=11");
            $max = mysqli_result($res2, 0);
            if(isset($_POST['submit1-6']) && $max==0) {
                $nodouble = mysqli_query($dbconn, "SELECT count(username) FROM giocatori where idpartita=$id and username='$line[0]'");
                $pablo = mysqli_result($nodouble, 0);
                if($pablo == 0){
                    $query = "insert into giocatori values ($id, $val+1, '$line[0]', 11)";
                    $data = mysqli_query($dbconn, $query);
                }
            }
            if(isset($_POST['submit1-6f']) && $max==0){
                $query = "insert into giocatori values ($id, $val+1, '$amico', 11)";
                 $data = mysqli_query($dbconn, $query);
            }
            if(isset($_POST['submit1-6a']) && $max==1){
                $query = "delete from giocatori where idpartita=$id and posizione= 11";
                 $data = mysqli_query($dbconn, $query);
            }
        ?>

        <?php
            $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=6");
            $max = mysqli_result($res2, 0);
            if(isset($_POST['submit2-1']) && $max==0) {
                $nodouble = mysqli_query($dbconn, "SELECT count(username) FROM giocatori where idpartita=$id and username='$line[0]'");
                $pablo = mysqli_result($nodouble, 0);
                if($pablo == 0){
                    $query = "insert into giocatori values ($id, $val+1, '$line[0]', 6)";
                    $data = mysqli_query($dbconn, $query);
                }
            }
            if(isset($_POST['submit2-1f']) && $max==0){
                $query = "insert into giocatori values ($id, $val+1, '$amico', 6)";
                 $data = mysqli_query($dbconn, $query);
            }
            if(isset($_POST['submit2-1a']) && $max==1){
                $query = "delete from giocatori where idpartita=$id and posizione= 6";
                 $data = mysqli_query($dbconn, $query);
            }
        ?>

        <?php
            $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=7");
            $max = mysqli_result($res2, 0);
            if(isset($_POST['submit2-2']) && $max==0) {
                $nodouble = mysqli_query($dbconn, "SELECT count(username) FROM giocatori where idpartita=$id and username='$line[0]'");
                $pablo = mysqli_result($nodouble, 0);
                if($pablo == 0){
                    $query = "insert into giocatori values ($id, $val+1, '$line[0]', 7)";
                    $data = mysqli_query($dbconn, $query);
                }
            }
            if(isset($_POST['submit2-2f']) && $max==0){
                $query = "insert into giocatori values ($id, $val+1, '$amico', 7)";
                 $data = mysqli_query($dbconn, $query);
            }
            if(isset($_POST['submit2-2a']) && $max==1){
                $query = "delete from giocatori where idpartita=$id and posizione= 7";
                 $data = mysqli_query($dbconn, $query);
            }
        ?>

        <?php
            $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=8");
            $max = mysqli_result($res2, 0);
            if(isset($_POST['submit2-3']) && $max==0) {
                $nodouble = mysqli_query($dbconn, "SELECT count(username) FROM giocatori where idpartita=$id and username='$line[0]'");
                $pablo = mysqli_result($nodouble, 0);
                if($pablo == 0){
                    $query = "insert into giocatori values ($id, $val+1, '$line[0]', 8)";
                    $data = mysqli_query($dbconn, $query);
                }
            }
            if(isset($_POST['submit2-3f']) && $max==0){
                $query = "insert into giocatori values ($id, $val+1, '$amico', 8)";
                 $data = mysqli_query($dbconn, $query);
            }
            if(isset($_POST['submit2-3a']) && $max==1){
                $query = "delete from giocatori where idpartita=$id and posizione= 8";
                 $data = mysqli_query($dbconn, $query);
            }
        ?>

        <?php
            $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=9");
            $max = mysqli_result($res2, 0);
            if(isset($_POST['submit2-4']) && $max==0) {
                $nodouble = mysqli_query($dbconn, "SELECT count(username) FROM giocatori where idpartita=$id and username='$line[0]'");
                $pablo = mysqli_result($nodouble, 0);
                if($pablo == 0){
                    $query = "insert into giocatori values ($id, $val+1, '$line[0]', 9)";
                    $data = mysqli_query($dbconn, $query);
                }
            }
            if(isset($_POST['submit2-4f']) && $max==0){
                $query = "insert into giocatori values ($id, $val+1, '$amico', 9)";
                 $data = mysqli_query($dbconn, $query);
            }
            if(isset($_POST['submit2-4a']) && $max==1){
                $query = "delete from giocatori where idpartita=$id and posizione= 9";
                 $data = mysqli_query($dbconn, $query);
            }
        ?>

        <?php
            $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=10");
            $max = mysqli_result($res2, 0);
            if(isset($_POST['submit2-5']) && $max==0) {
                $nodouble = mysqli_query($dbconn, "SELECT count(username) FROM giocatori where idpartita=$id and username='$line[0]'");
                $pablo = mysqli_result($nodouble, 0);
                if($pablo == 0){
                    $query = "insert into giocatori values ($id, $val+1, '$line[0]', 10)";
                    $data = mysqli_query($dbconn, $query);
                }
            }
            if(isset($_POST['submit2-5f']) && $max==0){
                $query = "insert into giocatori values ($id, $val+1, '$amico', 10)";
                 $data = mysqli_query($dbconn, $query);
            }
            if(isset($_POST['submit2-5a']) && $max==1){
                $query = "delete from giocatori where idpartita=$id and posizione= 10";
                 $data = mysqli_query($dbconn, $query);
            }
        ?>

        <?php
            $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=12");
            $max = mysqli_result($res2, 0);
            if(isset($_POST['submit2-6']) && $max==0) {
                $nodouble = mysqli_query($dbconn, "SELECT count(username) FROM giocatori where idpartita=$id and username='$line[0]'");
                $pablo = mysqli_result($nodouble, 0);
                if($pablo == 0){
                    $query = "insert into giocatori values ($id, $val+1, '$line[0]', 12)";
                    $data = mysqli_query($dbconn, $query);
                }
            }
            if(isset($_POST['submit2-6f']) && $max==0){
                $query = "insert into giocatori values ($id, $val+1, '$amico', 12)";
                 $data = mysqli_query($dbconn, $query);
            }
            if(isset($_POST['submit2-6a']) && $max==1){
                $query = "delete from giocatori where idpartita=$id and posizione= 12";
                $data = mysqli_query($dbconn, $query);
            }
        ?>
        
        <?php
                $res2 = mysqli_query($dbconn, "SELECT sport FROM partita where id=$id");
                $sport = mysqli_result($res2, 0);
                if($sport == 'Calcio a 5'){
                    echo '<a style="margin-left: 16%;" id="home-btn" href="calcio.php"><button type="button" class="btn btn-dark"><i class="fas fa-arrow-left"></i> Indietro</button></a>';
                }
                if($sport == 'Pallavolo'){
                    echo '<a style="margin-left: 16%;" id="home-btn" href="pallavolo.php"><button type="button" class="btn btn-dark"><i class="fas fa-arrow-left"></i> Indietro</button></a>';
                }
                if($sport == 'Padel'){
                    echo '<a style="margin-left: 16%;" id="home-btn" href="padel.php"><button type="button" class="btn btn-dark"><i class="fas fa-arrow-left"></i> Indietro</button></a>';
                }
                if($sport == 'Basket'){
                    echo '<a style="margin-left: 16%;" id="home-btn" href="basket.php"><button type="button" class="btn btn-dark"><i class="fas fa-arrow-left"></i> Indietro</button></a>';
                }
                if($sport == 'Tennis'){
                    echo '<a style="margin-left: 16%;" id="home-btn" href="tennis.php"><button type="button" class="btn btn-dark"><i class="fas fa-arrow-left"></i> Indietro</button></a>';
                }
            ?>
                <?php
                    if((isset($_POST['submit1-1']) || isset($_POST['submit1-2']) || isset($_POST['submit1-3']) || isset($_POST['submit1-4']) || isset($_POST['submit1-5']) || isset($_POST['submit1-6']) || isset($_POST['submit2-1']) || isset($_POST['submit2-2']) || isset($_POST['submit2-3']) || isset($_POST['submit2-4']) || isset($_POST['submit2-5']) || isset($_POST['submit2-6'])) && $pablo != 0) {
                        echo '<div id="alreadysigned-m" position: absolute; style="width:80%; z-index: 9998; margin-left: 10%; margin-top: 10px;" class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Ops!</strong> Sei già iscritto a questa partita.
                            </div>';
                        echo '<div id="alreadysigned" position: absolute; style="width:70%; z-index: 9998; margin-left: 20%; margin-top: 10px;" class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Ops!</strong> Sei già iscritto a questa partita.
                            </div>';
                    }
                ?>

        <?php
            $f = 'Amico di ';
            $res2 = mysqli_query($dbconn, "SELECT * FROM partita where id=$id");
            $row = mysqli_fetch_array($res2, MYSQLI_NUM);
            $impianto = $row[2];
            $data2 = $row[3];
            $ora = $row[4];
            $organizzatore = $row[5];
            $res2 = mysqli_query($dbconn, "SELECT sport FROM partita where id=$id");
            $sport = mysqli_result($res2, 0);
            if($sport == 'Calcio a 5'){
                echo '<div id="teams">
                <div style="height: auto;">
                    <h1 style="text-align:center;">Partita di <b>' . $sport . '</b></h1>
                    <div style="text-align: center"><b><font face="Arial" size=3>
                        Organizzatore: ' . $organizzatore . '<br>
                        Data: ' . $data2 . ',  Orario: ' . $ora . '<br>
                        Impianto: ' . $impianto . ' 
                        </font> 
                    </b>
                        </div>
                    <br>
                </div>
                <div id="squadre" style="height: auto; overflow-y: scroll;">
                <form id="form1" action="" method="post">
                <div id="left" style="margin-left: 2.5%; width: 45%; float:left">
                    <div id="left-content">
                    <b><font face="Arial" size=4>SQUADRA 1</font></b>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=1");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=1");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile1" name="profile1-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile1" name="profile1-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile1" name="profile1-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-1a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile1" name="profile1-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile1" name="profile1-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile1" name="profile1-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-1a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit1" name="submit1-1" value="' . $id . '">ISCRIVITI</button>';
                                    echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-1f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-1f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '
                        </div>
                        <br>
                        <div class="content-item">'; 
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=2");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=2");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile2" name="profile1-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile2" name="profile1-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile2" name="profile1-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-2a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile2" name="profile1-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile2" name="profile1-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile2" name="profile1-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-2a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit2" name="submit1-2" value="' . $id . '">ISCRIVITI</button>';
                                    echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-2f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-2f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=3");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=3");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile3" name="profile1-3" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile3" name="profile1-3" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile3" name="profile1-3" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-3a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-3a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile3" name="profile1-3" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile3" name="profile1-3" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile3" name="profile1-3" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-3a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-3a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit3" name="submit1-3" value="' . $id . '">ISCRIVITI</button>';
                                    echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-3f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-3f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=4");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=4");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile4" name="profile1-4" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile4" name="profile1-4" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile4" name="profile1-4" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-4a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-4a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile4" name="profile1-4" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile4" name="profile1-4" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile4" name="profile1-4" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-4a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-4a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit4" name="submit1-4" value="' . $id . '">ISCRIVITI</button>';
                                    echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-4f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-4f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                   
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=5");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=5");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile5" name="profile1-5" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile5" name="profile1-5" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile5" name="profile1-5" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-5a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-5a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile5" name="profile1-5" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile5" name="profile1-5" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile5" name="profile1-5" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-5a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-5a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit5" name="submit1-5" value="' . $id . '">ISCRIVITI</button>';
                                    echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-5f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-5f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '               
                        </div>
                        <br>
                    </div>
                </div>
                <div id="right" style="margin-right: 2.5%; width: 45%; float:right">
                    <div id="right-content">
                    <b><font face="Arial" size=4>SQUADRA 2</font></b>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=6");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=6");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile6" name="profile2-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile6" name="profile2-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile6" name="profile2-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-1a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile6" name="profile2-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile6" name="profile2-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile6" name="profile2-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-1a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit6" name="submit2-1" value="' . $id . '">ISCRIVITI</button>';
                                    echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-1f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-1f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                       
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=7");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=7");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile7" name="profile2-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile7" name="profile2-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile7" name="profile2-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-2a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile7" name="profile2-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile7" name="profile2-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile7" name="profile2-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-2a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit7" name="submit2-2" value="' . $id . '">ISCRIVITI</button>';
                                    echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-2f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-2f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                   
                            </div>
                            <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=8");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=8");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile8" name="profile2-3" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile8" name="profile2-3" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile8" name="profile2-3" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-3a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-3a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile8" name="profile2-3" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile8" name="profile2-3" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile8" name="profile2-3" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-3a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-3a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit8" name="submit2-3" value="' . $id . '">ISCRIVITI</button>';
                                    echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-3f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-3f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                      
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=9");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=9");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile9" name="profile2-4" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile9" name="profile2-4" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile9" name="profile2-4" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-4a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-4a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile9" name="profile2-4" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile9" name="profile2-4" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile9" name="profile2-4" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-4a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-4a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit9" name="submit2-4" value="' . $id . '">ISCRIVITI</button>';
                                    echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-4f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-4f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                      
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=10");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=10");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile10" name="profile2-5" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile10" name="profile2-5" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile10" name="profile2-5" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-5a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-5a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile10" name="profile2-5" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile10" name="profile2-5" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check1();" id="profile10" name="profile2-5" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-5a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-5a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit10" name="submit2-5" value="' . $id . '">ISCRIVITI</button>';
                                    echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-5f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-5f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                     
                    </div>
                    <br>
                </div>
                </form>
            </div>';
            }

            if($sport == 'Pallavolo'){
                echo '<div id="teams">
                <div style="height: auto;">
                    <h1 style="text-align:center;">Partita di <b>' . $sport . '</b></h1>
                    <div style="text-align: center"><b><font face="Arial" size=3>
                        Organizzatore: ' . $organizzatore . '<br>
                        Data: ' . $data2 . ',  Orario: ' . $ora . '<br>
                        Impianto: ' . $impianto . ' 
                        </font> 
                    </b>
                        </div>
                    <br>
                </div>
                <div id="squadre" style="height: auto; overflow-y: scroll;">
                <form id="form2" action="" method="post">
                <div id="left" style="margin-left: 2.5%; width: 45%; float:left">
                    <div id="left-content">
                    <b><font face="Arial" size=4>SQUADRA 1</font></b>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=1");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=1");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile1" name="profile1-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile1" name="profile1-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile1" name="profile1-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-1a" value="' . $id . '">ANNULLA</button>';
                                        echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile1" name="profile1-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile1" name="profile1-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile1" name="profile1-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-1a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit1" name="submit1-1" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-1f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-1f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '
                        </div>
                        <br>
                        <div class="content-item">'; 
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=2");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=2");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile2" name="profile1-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile2" name="profile1-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile2" name="profile1-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-2a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile2" name="profile1-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile2" name="profile1-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile2" name="profile1-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-2a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit2" name="submit1-2" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-2f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-2f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=3");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=3");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile3" name="profile1-3" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile3" name="profile1-3" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile3" name="profile1-3" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-3a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-3a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile3" name="profile1-3" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile3" name="profile1-3" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile3" name="profile1-3" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-3a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-3a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit3" name="submit1-3" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-3f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-3f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=4");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=4");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile4" name="profile1-4" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile4" name="profile1-4" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile4" name="profile1-4" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-4a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-4a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile4" name="profile1-4" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile4" name="profile1-4" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile4" name="profile1-4" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-4a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-4a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit4" name="submit1-4" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-4f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-4f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                   
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=5");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=5");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile5" name="profile1-5" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile5" name="profile1-5" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile5" name="profile1-5" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-5a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-5a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile5" name="profile1-5" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile5" name="profile1-5" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile5" name="profile1-5" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-5a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-5a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit5" name="submit1-5" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-5f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-5f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '               
                        </div>
                        <br>               
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=11");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=11");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile11" name="profile1-6" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile11" name="profile1-6" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile11" name="profile1-6" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-6a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-6a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile11" name="profile1-6" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile11" name="profile1-6" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile11" name="profile1-6" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-6a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-6a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit11" name="submit1-6" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-6f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-6f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '               
                        </div>
                        <br>
                    </div>
                </div>
                <div id="right" style="margin-right: 2.5%; width: 45%; float:right">
                    <div id="right-content">
                    <b><font face="Arial" size=4>SQUADRA 2</font></b>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=6");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=6");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile6" name="profile2-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile6" name="profile2-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile6" name="profile2-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-1a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile6" name="profile2-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile6" name="profile2-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile6" name="profile2-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-1a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit6" name="submit2-1" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-1f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-1f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                       
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=7");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=7");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile7" name="profile2-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile7" name="profile2-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile7" name="profile2-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-2a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile7" name="profile2-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile7" name="profile2-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile7" name="profile2-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-2a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit7" name="submit2-2" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-2f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-2f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                   
                            </div>
                            <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=8");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=8");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile8" name="profile2-3" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile8" name="profile2-3" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile8" name="profile2-3" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-3a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-3a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile8" name="profile2-3" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile8" name="profile2-3" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile8" name="profile2-3" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-3a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-3a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit8" name="submit2-3" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-3f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-3f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                      
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=9");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=9");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile9" name="profile2-4" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile9" name="profile2-4" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile9" name="profile2-4" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-4a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-4a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile9" name="profile2-4" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile9" name="profile2-4" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile9" name="profile2-4" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-4a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-4a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit9" name="submit2-4" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-4f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-4f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                      
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=10");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=10");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile10" name="profile2-5" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile10" name="profile2-5" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile10" name="profile2-5" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-5a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-5a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile10" name="profile2-5" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile10" name="profile2-5" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile10" name="profile2-5" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-5a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-5a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit10" name="submit2-5" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-5f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-5f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                     
                        </div>
                        <br>              
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=12");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=12");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile12" name="profile2-6" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile12" name="profile2-6" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile12" name="profile2-6" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-6a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-6a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile12" name="profile2-6" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile12" name="profile2-6" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check2();" id="profile12" name="profile2-6" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-6a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-6a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit12" name="submit2-6" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-6f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-6f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '
                    </div>
                    <br>
                </div>
                </form>
            </div>';
            }

            if($sport == 'Basket'){
                echo '<div id="teams">
                <div style="height: auto;">
                    <h1 style="text-align:center;">Partita di <b>' . $sport . '</b></h1>
                    <div style="text-align: center"><b><font face="Arial" size=3>
                        Organizzatore: ' . $organizzatore . '<br>
                        Data: ' . $data2 . ',  Orario: ' . $ora . '<br>
                        Impianto: ' . $impianto . ' 
                        </font> 
                    </b>
                        </div>
                    <br>
                </div>
                <div id="squadre" style="height: auto; overflow-y: scroll;">
                <form id="form3" action="" method="post">
                <div id="left" style="margin-left: 2.5%; width: 45%; float:left">
                    <div id="left-content">
                    <b><font face="Arial" size=4>SQUADRA 1</font></b>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=1");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=1");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile1" name="profile1-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile1" name="profile1-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile1" name="profile1-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-1a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile1" name="profile1-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile1" name="profile1-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile1" name="profile1-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-1a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit1" name="submit1-1" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-1f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-1f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '
                        </div>
                        <br>
                        <div class="content-item">'; 
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=2");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=2");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile2" name="profile1-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile2" name="profile1-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile2" name="profile1-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-2a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile2" name="profile1-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile2" name="profile1-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile2" name="profile1-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-2a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit2" name="submit1-2" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-2f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-2f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=3");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=3");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile3" name="profile1-3" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile3" name="profile1-3" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile3" name="profile1-3" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-3a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-3a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile3" name="profile1-3" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile3" name="profile1-3" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile3" name="profile1-3" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-3a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-3a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit3" name="submit1-3" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-3f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-3f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=4");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=4");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile4" name="profile1-4" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile4" name="profile1-4" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile4" name="profile1-4" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-4a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-4a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile4" name="profile1-4" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile4" name="profile1-4" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile4" name="profile1-4" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-4a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-4a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit4" name="submit1-4" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-4f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-4f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                   
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=5");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=5");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile5" name="profile1-5" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile5" name="profile1-5" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile5" name="profile1-5" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-5a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-5a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile5" name="profile1-5" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile5" name="profile1-5" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile5" name="profile1-5" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-5a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-5a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit5" name="submit1-5" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-5f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-5f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '               
                        </div>
                        <br>
                    </div>
                </div>
                <div id="right" style="margin-right: 2.5%; width: 45%; float:right">
                    <div id="right-content">
                    <b><font face="Arial" size=4>SQUADRA 2</font></b>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=6");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=6");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile6" name="profile2-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile6" name="profile2-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile6" name="profile2-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-1a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile6" name="profile2-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile6" name="profile2-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile6" name="profile2-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-1a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit6" name="submit2-1" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-1f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-1f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                       
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=7");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=7");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile7" name="profile2-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile7" name="profile2-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile7" name="profile2-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-2a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile7" name="profile2-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile7" name="profile2-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile7" name="profile2-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-2a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit7" name="submit2-2" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-2f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-2f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                   
                            </div>
                            <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=8");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=8");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile8" name="profile2-3" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile8" name="profile2-3" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile8" name="profile2-3" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-3a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-3a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile8" name="profile2-3" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile8" name="profile2-3" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile8" name="profile2-3" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-3a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-3a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit8" name="submit2-3" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-3f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-3f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                      
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=9");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=9");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile9" name="profile2-4" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile9" name="profile2-4" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile9" name="profile2-4" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-4a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-4a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile9" name="profile2-4" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile9" name="profile2-4" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile9" name="profile2-4" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-4a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-4a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit9" name="submit2-4" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-4f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-4f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                      
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=10");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=10");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile10" name="profile2-5" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile10" name="profile2-5" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile10" name="profile2-5" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-5a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-5a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile10" name="profile2-5" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile10" name="profile2-5" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check3();" id="profile10" name="profile2-5" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit2-5a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit2-5a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit10" name="submit2-5" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit2-5f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit2-5f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                     
                        </div>
                        <br>
                    </div>
                </div>
                </form>
            </div>';
            }

            if($sport == 'Padel'){
                echo '<div id="teams">
                <div style="height: auto;">
                    <h1 style="text-align:center;">Partita di <b>' . $sport . '</b></h1>
                    <div style="text-align: center"><b><font face="Arial" size=3>
                        Organizzatore: ' . $organizzatore . '<br>
                        Data: ' . $data2 . ',  Orario: ' . $ora . '<br>
                        Impianto: ' . $impianto . ' 
                        </font> 
                    </b>
                        </div>
                    <br>
                </div>
                <div id="squadre" style="height: auto; overflow-y: scroll;">
                <form id="form4" action="" method="post">
                <div id="left" style="margin-left: 2.5%; width: 45%; float:left">
                    <div id="left-content">
                    <b><font face="Arial" size=4>SQUADRA 1</font></b>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=1");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=1");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile1" name="profile1-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile1" name="profile1-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile1" name="profile1-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-1a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile1" name="profile1-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile1" name="profile1-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile1" name="profile1-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-1a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit1" name="submit1-1" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-1f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-1f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '
                        </div>
                        <br>
                        <div class="content-item">'; 
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=2");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=2");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile2" name="profile1-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile2" name="profile1-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile2" name="profile1-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-2a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile2" name="profile1-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile2" name="profile1-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile2" name="profile1-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-2a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit2" name="submit1-2" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-2f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-2f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '
                        </div>
                        <br>
                    </div>
                </div>
                <div id="right" style="margin-right: 2.5%; width: 45%; float:right">
                    <div id="right-content">
                    <b><font face="Arial" size=4>SQUADRA 2</font></b>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=3");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=3");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile3" name="profile1-3" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile3" name="profile1-3" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile3" name="profile1-3" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-3a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-3a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile3" name="profile1-3" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile3" name="profile1-3" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile3" name="profile1-3" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-3a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-3a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit3" name="submit1-3" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-3f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-3f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                       
                        </div>
                        <br>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=4");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=4");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile4" name="profile1-4" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile4" name="profile1-4" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile4" name="profile1-4" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-4a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-4a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile4" name="profile1-4" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile4" name="profile1-4" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check4();" id="profile4" name="profile1-4" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-4a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-4a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit4" name="submit1-4" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-4f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-4f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                   
                        </div>
                        <br>
                    </div>
                </form>
            </div>';
            }

            if($sport == 'Tennis'){
                echo '<div id="teams">
                <div style="position: relative; height: auto;">
                    <h1 style="text-align:center;">Partita di <b>' . $sport . '</b></h1>
                    <div style="text-align: center"><b><font face="Arial" size=3>
                        Organizzatore: ' . $organizzatore . '<br>
                        Data: ' . $data2 . ',  Orario: ' . $ora . '<br>
                        Impianto: ' . $impianto . ' 
                        </font> 
                    </b>
                        </div>
                    <br>
                </div>
                <div id="squadre" style="height: auto; overflow-y: scroll;">
                <form id="form5" action="" method="post">
                <div id="left" style="margin-left: 2.5%; width: 45%; float:left">
                    <div id="left-content">
                    <b><font face="Arial" size=4>SQUADRA 1</font></b>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=1");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=1");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check5();" id="profile1" name="profile1-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check5();" id="profile1" name="profile1-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check5();" id="profile1" name="profile1-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-1a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check5();" id="profile1" name="profile1-1" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check5();" id="profile1" name="profile1-1" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check5();" id="profile1" name="profile1-1" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-1a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-1a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit1" name="submit1-1" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-1f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-1f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '
                        </div>
                        <br>
                    </div>
                </div>
                <div id="right" style="margin-right: 2.5%; width: 45%; float:right">
                    <div id="right-content">
                    <b><font face="Arial" size=4>SQUADRA 2</font></b>
                        <div class="content-item">';
                                $res2 = mysqli_query($dbconn, "SELECT count(codice) FROM giocatori where idpartita=$id and posizione=2");
                                $max = mysqli_result($res2, 0);
                                if($max == 1){
                                    $res = mysqli_query($dbconn, "SELECT username FROM giocatori where idpartita=$id and posizione=2");
                                    $username = mysqli_result($res, 0);
                                    $friend = 'Amico di ' . $line[0];
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username'";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $online = mysqli_result($result3, 0);
                                    $sql3 = "SELECT count(username) FROM $tbl_name where username = '$username' and afk=1";
                                    $result3 = mysqli_query($dbconn, $sql3);
                                    $afk = mysqli_result($result3, 0);
                                    echo '<div class="settantapx">';
                                        if($username == $line[0]){
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check5();" id="profile2" name="profile1-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check5();" id="profile2" name="profile1-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check5();" id="profile2" name="profile1-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-2a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    } 
                                    else if($username != $line[0] && $username != $friend){
                                        if (strpos($username, $f) !== false) {
                                            echo '<button id="friend" class="btn btn-success" type="button">' . $username . '</button>';
                                            echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $username . '</button>';
                                        }
                                        else{
                                            if($online != 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check5();" id="profile2" name="profile1-2" value= ' . $username . '><img src="offline.png" width=16> ' . $username . '</button>';
                                            }
                                            else if($afk == 1){
                                                echo '<button class="btn btn-success" type="submit" onclick="return check5();" id="profile2" name="profile1-2" value= ' . $username . '><img src="afk.png" width=16> ' . $username . '</button>';
                                            }
                                            else{
                                                echo '<button class="btn btn-success" type="submit" onclick="return check5();" id="profile2" name="profile1-2" value= ' . $username . '><img src="online.png" width=16> ' . $username . '</button>';
                                            }
                                        }
                                    }
                                    else{
                                        echo '<button id="friend" class="btn btn-success" type="button">' . $friend . '</button>';
                                        echo '<button id="friend-m" class="btn btn-success btn-sm" type="button">' . $friend . '</button>';
                                        echo '<button class="btn btn-logout" type="submit" id="submit1-a" name="submit1-2a" value="' . $id . '">ANNULLA</button>';
echo '<button style="margin-top: 5px;" class="btn btn-logout btn-sm" type="submit" id="submit1-a-m" name="submit1-2a" value="' . $id . '"><i class="fa-solid fa-x"></i></button>';
                                    }
                                    echo '</div>';
                                }
                                else{
                                    echo '<div class="settantapx">';
                                    echo '<button class="btn btn-success" type="submit" id="submit2" name="submit1-2" value="' . $id . '">ISCRIVITI</button>';
                                                                        echo '<button class="btn btn-info" type="submit" id="submit1-f" name="submit1-2f" value="' . $id . '">ISCRIVI UN AMICO</button>';
                                    echo '<button class="btn btn-sm btn-info" type="submit" id="submit1-f-m" name="submit1-2f" value="' . $id . '"><i class="fa-solid fa-plus"></i></button>';
                                    echo '</div>';
                                }
                        echo '                   
                            </div>
                        <br>
                    </div>
                    </form>
                    </div>
            </div>';
            }
        ?>
    
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

        $(".close").click(function () { 
    $(".alert").fadeOut(500);
  });
    </script>

</body>
</html>