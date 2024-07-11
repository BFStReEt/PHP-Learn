<?php
    require __DIR__ . '/../config.php';
    session_start();
    
    $page_layout = isset($_GET['page_layout']) ? $_GET['page_layout'] : 'login';
    