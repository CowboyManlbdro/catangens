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
    <section class="tasks">
        <img src="icons/notification.svg" alt="" class="notification_bell">
        <img src="icons/arrow.svg" alt="" class="arrow">
        <div class="content_header">создать соревнование</div>
        <div class="new_comp">
            <input type="text" class="name_comp" placeholder="Название соревнования">
            <input type="text" class="descr_comp" placeholder="Введите описание соревнования">
            <input type="text" class="descr_comp">
            <input type="text" class="descr_comp">
            <div class="in_wrap">
                <div class="wrap">
                    <label for="count" class="count_in"><img src="icons/teams/members.svg" alt=""></label>
                    <input type="text" name="count" class="descr_comp members_comp">
                    <div class="placeholders">Сколько человек может участвовать в соревновании</div>
                </div>
                <div class="wrap">
                    <input type="text" class="descr_comp date_comp">
                    <div class="placeholders">Дата начала и окончания соревнования</div>
                </div>
            </div>
            <input type="text" class="descr_comp count_tasks">
            <div class="place">Количество заданий</div>
            <div class="tasks_item">
                <div class="task_header">Задание 1.</div>
                <div class="task_descr">Введите текст задания</div>
                <div class="task_answers">
                    <input type="text" class="task_input" placeholder="введите ответ">
                    <a href="#" class="add_file">+ загрузить файл</a>
                </div>
                <button class="window_btn save_task_btn">Сохранить</button>
            </div>
            <div class="tasks_item">
                <div class="task_header">Задание 2.</div>
                <div class="task_descr">Введите текст задания</div>
                <div class="task_answers">
                    <input type="text" class="task_input" placeholder="введите ответ">
                    <a href="#" class="add_file">+ загрузить файл</a>
                </div>
                <button class="window_btn save_task_btn">Сохранить</button>
            </div>
        </div>
        <button class="window_btn save_answers">Отправить</button>
    </section>


    <footer class="footer">
        <div class="main_subheader">С нами математика стала ещё интереснее!</div>
    </footer>
</body>

</html>