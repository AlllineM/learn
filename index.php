<?php

if (empty($_POST['action'])) {
    include __DIR__ . '/view/registration.php';
} else {
    $action = $_POST['action'];
    if ($action == 'user/registration') {
        include __DIR__ . '/controller/userController.php';
    } elseif ($action == 'note/add') {
        include __DIR__ . '/controller/noteController.php';
    }
}

