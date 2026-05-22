<?php
session_start();

if (isset($_SESSION['user']) == true) {
    header('Location: dashboard.php');
    die();
}

$usersFile = 'users.php';

if (!file_exists($usersFile)) {
    $fp = fopen($usersFile, "w");
    fwrite($fp, "<?php\nreturn [];\n?>");
    fclose($fp);
}

$users = include $usersFile;

$errors = array();
$success = '';

if (isset($_POST['submit'])) {

    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $confirm = isset($_POST['confirm']) ? trim($_POST['confirm']) : '';

    if ($name == '') {
        $errors[] = 'Введите имя';
    }

    if ($email == '') {
        $errors[] = 'Введите email';
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Некорректный email';
        }
    }

    if ($password == '') {
        $errors[] = 'Введите пароль';
    } else {
        if (strlen($password) < 6) {
            $errors[] = 'Пароль минимум 6 символов';
        }
    }

    if ($password != $confirm) {
        $errors[] = 'Пароли не совпадают';
    }

    $email_found = false;
    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i]['email'] == $email) {
            $email_found = true;
        }
    }

    if ($email_found == true) {
        $errors[] = 'Этот email уже зарегистрирован';
    }

    if (count($errors) == 0) {
        
        $arr = array();
        $arr['name'] = $name;
        $arr['email'] = $email;
        $arr['password'] = md5($password);

        $users[] = $arr;

        $export = "<?php\nreturn " . var_export($users, true) . ";\n?>";
        file_put_contents($usersFile, $export);

        $success = 'Регистрация прошла! Теперь можно <a href="login.php">войти</a>.';
    }
}
?>