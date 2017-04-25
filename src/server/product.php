<?php
    include 'sql.php';
    header( 'content-type: application/json; charset=utf-8' );

    $bdd=sql_connect();

    $QueryString = $_SERVER['QUERY_STRING'];
    

    $Id = substr($QueryString, strpos($QueryString, "productId=") + 10);

    if (strpos($Id, "&")) {
        $Id = substr($Id, 0, strpos($Id, "&"));
    }

    $result = sql_Product($bdd,$Id);

    if ($result == NULL) {
        header('HTTP/1.0 404 Not Found');
    } else {
        echo json_encode($result, JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT);
    }

    unset($bdd);
?>