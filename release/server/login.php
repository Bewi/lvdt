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
        $passwordHash = sha1($loginPassword[1]);
        $bdd = sql_connect();
        
        session_regenerate_id(true);

        $account = sql_Account($bdd, $loginPassword[0], $passwordHash, session_id());

        unset($bdd);

        if ($account->numErreur == 0) {
            $_SESSION['authenticated'] = true;  
            $_SESSION['login'] = $loginPassword[0];
            $_SESSION['account'] = json_encode($account);
            $_SESSION['clientNumber'] = $account->numClient;

            header("HTTP/1.1 200 OK");
        } else if ($account->numErreur == 1) {
            unset($_SESSION['authenticated']);  
            unset($_SESSION['login']);
            unset($_SESSION['account']);

            header("HTTP/1.1 401 Unauthorized");
        } else if ($account->numErreur == 2) {
            unset($_SESSION['authenticated']);  
            unset($_SESSION['login']);
            unset($_SESSION['account']);

            header("HTTP/1.1 400 Bad Request");
        }
    } catch (Exception $ex) {
        echo ex;
    }

?>