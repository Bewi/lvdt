<?php
    session_start();

    if ($_SESSION['authenticated'] == false) {
        header("HTTP/1.1 401 unauthorized");
    } else {
        echo $_SESSION['account'];
    }

?>