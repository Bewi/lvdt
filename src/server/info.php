<?php
    session_start();
    echo session_id();
    echo '    ';
    echo $_SESSION['login'];
    echo $_SESSION['authenticated'];
?>