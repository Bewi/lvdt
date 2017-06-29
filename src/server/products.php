<?php
    session_start();
    include 'sql.php';
    header( 'content-type: text/html; charset=utf-8' );

    $bdd=sql_connect();

    parse_str($_SERVER['QUERY_STRING'], $QueryString);
    
    $result = sql_Products($bdd, $QueryString['search'], $QueryString['offset'], $QueryString['size']);

    echo json_encode($result, JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT);

    unset($bdd);
?>