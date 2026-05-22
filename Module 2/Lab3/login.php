<?php
session_start();

if (isset($_SESSION['user']) == true) {
    header('Location: dashboard.php');
    die();
}

$usersFile = 'users.php';
$users = array();

if (file_exists($usersFile) == true) {
    $users = include $usersFile;
}

$errors = array();

if (isset($_POST['submit']) == true) {

    $email = '';
    if (isset($_POST['email']) == true) {
        $email = trim($_POST['email']);
    }

    $password = '';
    if (isset($_POST['password']) == true) {
        $password = trim($_POST['password']);
    }

    if ($email == '') {
        $errors[] = 'Введите email';
    }
    if ($password == '') {
        $errors[] = 'Введите пароль';
    }

    if (count($errors) == 0) {
        $found = null;

        for ($i = 0; $i < count($users); $i++) {
            if ($users[$i]['email'] == $email && $users[$i]['password'] == md5($password)) {
                $found = $users[$i];
            }
        }

        if ($found == null) {
            $errors[] = 'Неверный email или пароль';
        } else {
            $_SESSION['user'] = array(
                'name' => $found['name'],
                'email' => $found['email']
            );
            header('Location: dashboard.php');
            die();
        }
    }
}

include 'login_view.php';
?>