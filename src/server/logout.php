<?php
    session_start();
    session_destroy();
    header('content-type: application/json; charset=utf-8');
    header("HTTP/1.1 200 OK");
?>