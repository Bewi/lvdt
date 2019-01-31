<?php
    session_start();
    include 'sql.php';
    header( 'content-type: text/html; charset=utf-8' );

    $bdd=sql_connect();

    $QueryString = $_SERVER['QUERY_STRING'];

    $Id = substr($QueryString, strpos($QueryString, "productId=") + 10);

    if (strpos($Id, "&")) {
        $Id = substr($Id, 0, strpos($Id, "&"));
    }

    $result = sql_AssociatedProduts($bdd,$Id);

    echo json_encode($result);

    unset($bdd);
?>