<?php
    session_start();

    include 'sql.php';

    if($_SESSION['authenticated'] == false) {
        header("HTTP/1.1 401 unauthorized");
    } else {
        $bdd = sql_connect();

        parse_str($_SERVER['QUERY_STRING'], $QueryString);

        $saleDetail = sql_SaleDetail($bdd, $_SESSION['clientNumber'], session_id(), $QueryString['saleId'], 50, 0);

        echo json_encode($saleDetail);

        unset($bdd);
    }
?>