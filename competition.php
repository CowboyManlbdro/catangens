<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Соревнование</title>
    <?php include('link.php') ?>

</head>

<body>
    <nav class="catangens">
        <div class="header_bg">
            <img src="img/header_cat.svg" alt="" class="header_cat">
        </div>
    </nav>
    <section class="tasks">
        <img src="icons/notification.svg" alt="" class="notification_bell">
        <img src="icons/arrow.svg" alt="" class="arrow">
        <div class="content_header">таблица умножения</div>
        <button class="window_btn save_answers theory" onclick="window.location.href='theory.php'">Теория</button>
        <div class="tasks_nav">
            <div class="task_nav_item">
                <div class="number_task">1</div>
                <div class="task_round"></div>
            </div>
            <div class="task_nav_item">
                <div class="number_task">2</div>
                <div class="task_round task_round_active"></div>
            </div>
            <div class="task_nav_item">
                <div class="number_task">3</div>
                <div class="task_round"></div>
            </div>
            <div class="task_nav_item">
                <div class="number_task">4</div>
                <div class="task_round"></div>
            </div>
            <div class="task_nav_item">
                <div class="number_task">5</div>
                <div class="task_round"></div>
            </div>
            <div class="task_nav_item">
                <div class="number_task">6</div>
                <div class="task_round"></div>
            </div>
            <div class="task_nav_item">
                <div class="number_task">7</div>
                <div class="task_round"></div>
            </div>
        </div>
        <div class="tasks_item">
            <div class="task_header">Задание 1.</div>
            <div class="task_descr">6*8</div>
            <div class="task_answers">
                <input type="text" class="task_input">
                <a href="#" class="add_file">+ загрузить файл</a>
            </div>
            <button class="window_btn save_task_btn">Сохранить</button>
        </div>
        <div class="tasks_item">
            <div class="task_header">Задание 2.</div>
            <div class="task_descr">7*7</div>
            <div class="task_answers">
                <input type="text" class="task_input">
                <a href="#" class="add_file">+ загрузить файл</a>
            </div>
            <button class="window_btn save_task_btn">Сохранить</button>
        </div>
        <button class="window_btn save_answers">Отправить</button>
    </section>

    <footer class="footer">
        <div class="main_subheader">С нами математика стала ещё интереснее!</div>
    </footer>
</body>

</html>