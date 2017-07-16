<?php
    session_start();
    include 'sql.php';


    if ($_SESSION['authenticated'] == false) {
        header("HTTP/1.1 401 unauthorized");
    } else {
        $bdd = sql_connect();

        $history = sql_History($bdd, $_SESSION['clientNumber'], session_id(), 50, 0);

        echo json_encode($history);

        unset($bdd);
    }
?>