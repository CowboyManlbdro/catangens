<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Авторизация</title>
    <?php include('link.php') ?>

</head>

<body>
    <nav class="catangens">
        <div class="header_bg">
            <img src="img/header_cat.svg" alt="" class="header_cat">
        </div>
    </nav>
    <?php
    if (!empty($_POST)) {
        if ($_POST['login'] != '' && $_POST['pass'] != '') {
            $login = trim(strip_tags($_POST['login']));
            $password = trim(strip_tags($_POST['pass']));
            $user = getUser($db, $login);
            if (password_verify($password, $user['password'])) {
                $_SESSION['role'] = $user['role'];
                $_SESSION['login'] = $user['login'];
    ?>
                <div id="window_result" class="window_bg">
                    <div class="window_wrap auth">
                        <img src="img/cat_window.svg" alt="" class="cat_window">
                        <div class="window auth">
                            <img src="img/hands.svg" alt="" class="cat_window_hands">
                            <img src="img/feet.svg" alt="" class="cat_window_feets">
                            <div class="text_header window_header">Вы успешно вошли!</div>
                            <button class="window_btn auth_btn" onclick="window.location.href='main.php'">Хорошо</button>
                        </div>
                    </div>
                </div>

            <?php
            } else {
            ?>
                <div id="window_result" class="window_bg">
                    <div class="window_wrap auth">
                        <img src="img/cat_window.svg" alt="" class="cat_window">
                        <div class="window auth">
                            <img src="img/hands.svg" alt="" class="cat_window_hands">
                            <img src="img/feet.svg" alt="" class="cat_window_feets">
                            <div class="text_header window_header">Не верно введен логин или пароль!</div>
                            <button class="window_btn auth_btn" onclick="window.location.href='index.html#auth'">Хорошо</button>
                        </div>
                    </div>
                </div>
            <?php
            }
        } else {
            ?>
            <div id="window_result" class="window_bg">
                <div class="window_wrap auth">
                    <img src="img/cat_window.svg" alt="" class="cat_window">
                    <div class="window auth">
                        <img src="img/hands.svg" alt="" class="cat_window_hands">
                        <img src="img/feet.svg" alt="" class="cat_window_feets">
                        <div class="text_header window_header">Заполните все поля!</div>
                        <button class="window_btn auth_btn" onclick="window.location.href='index.html#auth'">Хорошо</button>
                    </div>
                </div>
            </div>
    <?php
        }
    }

    ?>

</body>

</html>