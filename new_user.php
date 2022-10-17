<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Регистрация</title>
    <?php include('link.php') ?>

</head>

<body>
    <nav class="catangens">
        <div class="header_bg">
            <img src="img/header_cat.svg" alt="" class="header_cat">
        </div>
    </nav>
    <?php
    if (isset($_POST['login']) && $_POST['pass'] && $_POST['f'] && $_POST['i'] && $_POST['o'] && $_POST['email'] != '') {
        $l = $_POST['login'];
        if (LoginFree($db, $l)) {
            $pass = $_POST['pass'];
            $p = password_hash($pass, PASSWORD_DEFAULT);
            $hash = md5($l . time());
            $f = $_POST['f'];
            $i = $_POST['i'];
            $o = $_POST['o'];
            $email = $_POST['email'];
            $role = "user";
            addUser($db, $f, $i, $o, $l, $email, $p,0,0, $role, "no");
            session_destroy();
    ?>
            <div id="window_result" class="window_bg">
                <div class="window_wrap auth">
                    <img src="img/cat_window.svg" alt="" class="cat_window">
                    <div class="window auth">
                        <img src="img/hands.svg" alt="" class="cat_window_hands">
                        <img src="img/feet.svg" alt="" class="cat_window_feets">
                        <div class="text_header window_header">Вы успешно зарегистрировались!</div>
                        <button class="window_btn auth_btn" onclick="window.location.href='index.php'">Хорошо</button>
                    </div>
                </div>
            </div>
        <?php
        } else {
            session_destroy(); ?>
            <div id="window_result" class="window_bg">
                <div class="window_wrap auth">
                    <img src="img/cat_window.svg" alt="" class="cat_window">
                    <div class="window auth">
                        <img src="img/hands.svg" alt="" class="cat_window_hands">
                        <img src="img/feet.svg" alt="" class="cat_window_feets">
                        <div class="text_header window_header">Такой логин уже есть!</div>
                        <button class="window_btn auth_btn" onclick="window.location.href='index.php#registration'">Хорошо</button>
                    </div>
                </div>
            </div>
        <?php
        }
    } else {
        session_destroy(); ?>
            <div id="window_result" class="window_bg">
                <div class="window_wrap auth">
                    <img src="img/cat_window.svg" alt="" class="cat_window">
                    <div class="window auth">
                        <img src="img/hands.svg" alt="" class="cat_window_hands">
                        <img src="img/feet.svg" alt="" class="cat_window_feets">
                        <div class="text_header window_header">Заполните все поля!</div>
                        <button class="window_btn auth_btn" onclick="window.location.href='index.php#registration'">Хорошо</button>
                    </div>
                </div>
            </div>
    <?php }
    ?>

</body>

</html>