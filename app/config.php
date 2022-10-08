<?php

    session_start();

    if (!isset($_SESSION['token'])){
        $_SESSION['global_token'] = md5( uniqid(mt_rand(),true) );
    }

    if (!defined('BASE_PATH')){
        define('BASE_PATH', 'http://localhost/unidad4/');
    }

?>