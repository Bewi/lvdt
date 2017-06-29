<?php 
    session_start();
    include('sql.php');
    header('content-type: application/json; charset=utf-8');

    $headers = apache_request_headers();

    try {
        $authorization = $headers['Authorization'];
        $base = str_replace('Basic ', '', $authorization);
        $loginGroup = base64_decode($base);

        $loginPassword = explode(':', $loginGroup);

        // echo $loginPassword[0] . '\r\n';
        // echo $loginPassword[1];
        $_SESSION['authenticated'] = true;  
        $_SESSION['login'] = $loginPAssword[0];
        
        header("HTTP/1.1 200 OK");
    } catch (Exception $ex) {
        echo ex;
    }

?>