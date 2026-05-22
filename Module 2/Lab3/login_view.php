<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
<div class="wrap">
    <div class="header">
        <h1>Вход</h1>
        <p>Авторизация пользователя</p>
    </div>

    <div class="card">

        <?php if (count($errors) > 0): ?>
        <div class="alerts">
            <?php foreach ($errors as $e): ?>
                <div class="alert err"><?php echo htmlspecialchars($e); ?></div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <form action="login.php" method="POST">

            <div class="field">
                <label>email</label>
                <input type="email" name="email" placeholder="ivan@mail.ru" value="<?php if (isset($_POST['email'])) { echo htmlspecialchars($_POST['email']); } ?>">
            </div>

            <div class="field">
                <label>password</label>
                <input type="password" name="password" placeholder="ваш пароль">
            </div>

            <button type="submit" name="submit" value="1" class="btn">
                [ ВОЙТИ ]
            </button>

        </form>

        <?php if (isset($_POST) && count($_POST) > 0): ?>
        <div class="debug">
            <strong style="color:#444">Данные POST:</strong><br><br>
            <?php
            foreach ($_POST as $key => $val) {
                if ($key == 'password') {
                    $val = '***';
                }
                echo htmlspecialchars($key . ' => ' . $val) . '<br>';
            }
            ?>
        </div>
        <?php endif; ?>

        <?php if (count($users) > 0): ?>
        <div class="hint">
            Зарегистрировано пользователей: <?php echo count($users); ?>
        </div>
        <?php endif; ?>

    </div>

    <div class="switch">
        Нет аккаунта? <a href="register.php">зарегистрироваться →</a>
    </div>
</div>
</body>
</html>