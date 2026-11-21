<?php
$dbconn = mysqli_connect("localhost", "avid3868345", "", "my_avid3868345");

// Esegue una query preparata. Restituisce il risultato per le SELECT, true/false per INSERT/UPDATE/DELETE.
function q($db, $sql, $params = []) {
    $st = $db->prepare($sql);
    if ($params) {
        $st->bind_param(str_repeat('s', count($params)), ...$params);
    }
    $st->execute();
    $res = $st->get_result();
    return $res === false ? $st->affected_rows >= 0 : $res;
}

function mysqli_result($res, $row) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[0];
}