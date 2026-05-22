<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style_reg.css">
</head>
<body>
<div class="wrap">
    <div class="header">
        <h1>Регистрация</h1>
        <p>// создать новый аккаунт</p>
    </div>

    <div class="card">

        <?php if (count($errors) > 0 || $success != ''): ?>
        <div class="alerts">
            <?php foreach ($errors as $e): ?>
                <div class="alert err">// <?php echo $e; ?></div>
            <?php endforeach; ?>
            
            <?php if ($success != ''): ?>
                <div class="alert ok">// <?php echo $success; ?></div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <form action="register.php" method="POST">

            <div class="field">
                <label>name</label>
                <input type="text" name="name" placeholder="Иван Иванов" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
            </div>

            <div class="field">
                <label>email</label>
                <input type="email" name="email" placeholder="ivan@mail.ru" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            </div>

            <div class="field">
                <label>password</label>
                <input type="password" name="password" placeholder="минимум 6 символов">
            </div>

            <div class="field">
                <label>confirm password</label>
                <input type="password" name="confirm" placeholder="повторите пароль">
            </div>

            <button type="submit" name="submit" value="1" class="btn">
                [ ЗАРЕГИСТРИРОВАТЬСЯ ]
            </button>

        </form>

        <?php if (isset($_POST) && count($_POST) > 0): ?>
        <div class="debug">
            <strong style="color:#444">// ТЕСТ ПРИШЕЛ ЛИ ПОСТ</strong><br><br>
            <?php print_r($_POST); ?>
        </div>
        <?php endif; ?>

    </div>

    <div class="switch">
        Уже есть аккаунт? <a href="login.php">войти →</a>
    </div>
</div>
</body>
</html>