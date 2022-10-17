<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Выход</title>
    <?php include('link.php') ?>

</head>

<body>
    <nav class="catangens">
        <div class="header_bg">
            <img src="img/header_cat.svg" alt="" class="header_cat">
        </div>
    </nav>
    <?php
         session_destroy();
    ?>

                <div id="window_result" class="window_bg">
                    <div class="window_wrap auth">
                        <img src="img/cat_window.svg" alt="" class="cat_window">
                        <div class="window auth">
                            <img src="img/hands.svg" alt="" class="cat_window_hands">
                            <img src="img/feet.svg" alt="" class="cat_window_feets">
                            <div class="text_header window_header">Вы успешно вышли из аккаунта!</div>
                            <button class="window_btn auth_btn" onclick="window.location.href='index.html'">Хорошо</button>
                        </div>
                    </div>
                </div>
</body>

</html>