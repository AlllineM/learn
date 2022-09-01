<?php

$url = $_SERVER['REQUEST_URI'];

if ($url == '/') {
    include __DIR__ . '/view/registration.php';
} else {
    if ($url == '..index.php/registration') {
        include __DIR__ . '/controller/userController.php';
    } elseif ($url == '../index.php/note/add') {
        include __DIR__ . '/controller/noteController.php';
    }
}

