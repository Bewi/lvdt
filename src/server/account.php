<?
    session_start();

    if ($_SESSION['Authenticated'] == false) {
        header("HTTP/1.1 401 unauthorized");
    } else {

    }

?>