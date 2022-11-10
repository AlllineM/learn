<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


$url = $_SERVER['REQUEST_URI'];



if ($url == '/') {

    include __DIR__ . '/view/registration.php';

} else {
    if ($url == '/index.php/registration') {

        include __DIR__ . '/controller/userController.php';

    } elseif ($url == '/index.php/note/add') {
        $temp = 'ququ';
        var_dump($temp);
        include __DIR__ . '/controller/noteController.php';

    }
}

