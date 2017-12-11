<?php 
    function execute(requestId, email) {
        include('sql.php');

        $bdd=sql_connect();

        parse_str($_SERVER['QUERY_STRING'], $QueryString);
        
        $result = sql_requestPasswordChange($bdd, $QueryString['requestId'], $QueryString['email']);

        unset($bdd);

        return $result;
    }
?>
