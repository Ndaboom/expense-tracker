<?php

if (!isset($_SESSION['user_id'])) {

    $_SESSION['forwarding_url'] = $_SERVER['REQUEST_URI'];

    header('Location: index.php');

    exit();
}