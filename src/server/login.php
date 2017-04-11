<?php 
    include('sql.php');
    header('content-type: application/json; charset=utf-8');

    $headers = apache_request_headers();

    try {
        $authorization = $headers['Authorization'];
        $base = str_replace('Basic ', '', $authorization);
        $loginGroup = base64_decode($base);

        $loginPassword = explode(':', $loginGroup);

        echo $loginPassword[0] . '\r\n';
        echo $loginPassword[1];
    } catch (Exception $ex) {
        echo ex;
    }

?>