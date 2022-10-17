<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Котангенс</title>
    <?php include('link.php') ?>

</head>

<body>
    <nav class="catangens">
        <div class="header_bg">
            <img src="img/header_cat.svg" alt="" class="header_cat">
        </div>
    </nav>

    <? $user = getUser($db, $_SESSION['login']); ?>
    <section class="content">
        <section id="section_ni2" class="all_competitions">
            <div class="container">
                <div class="change_type">
                    <button class="solo">Одиночные</button>
                    <button class="teams">Командные</button>
                    <button class="ends_competition">Завершенные</button>
                </div>
                <div class="wrap">
                    <label for="search" class="label_input"><img src="icons/search.svg" alt=""></label>
                    <input type="text" name="search" class="search" placeholder="Поиск">
                </div>
                <div class="solo_competitions">
                    <div class="competitions">
                        <div class="competition_item">
                            <div class="text_header competition_name">Таблица умножения</div>
                            <div class="text_header competition_info"><span>Тип:</span> На время</div>
                            <div class="text_header competition_info"> <img src="icons/clock.svg" alt=""> 12.04.2022 - 14.04.2022</div>
                            <div class="text_header competition_info"> <img src="icons/people.svg" alt=""> 21/25</div>
                            <button class="window_btn competition_btn" style="margin-top: 44px">Участвовать</button>
                            <div class="more"><a href="#" class="more_link">ПОДРОБНЕЕ</a></div>
                        </div>
                        <div class="competition_item">
                        <div class="text_header competition_name">Порядок действий</div>
                            <div class="text_header competition_info"><span>Тип:</span> На время</div>
                            <div class="text_header competition_info"> <img src="icons/clock.svg" alt=""> 14.02.2022 - 16.02.2022</div>
                            <div class="text_header competition_info"> <img src="icons/people.svg" alt=""> 25/26</div>
                            <button class="window_btn competition_btn" style="margin-top: 44px">Участвовать</button>
                            <div class="more"><a href="#" class="more_link">ПОДРОБНЕЕ</a></div>
                        </div>
                        <div class="competition_item">
                        <div class="text_header competition_name">Умножение двухзначных чисел</div>
                            <div class="text_header competition_info"><span>Тип:</span> На время</div>
                            <div class="text_header competition_info"> <img src="icons/clock.svg" alt=""> 05.03.2022 - 10.03.2022</div>
                            <div class="text_header competition_info"> <img src="icons/people.svg" alt=""> 26/26</div>
                            <button class="window_btn competition_btn" >Участвовать</button>
                            <div class="more"><a href="#" class="more_link">ПОДРОБНЕЕ</a></div>
                        </div>
                        <div class="competition_item">
                        <div class="text_header competition_name">Деление двухзначных чисел</div>
                            <div class="text_header competition_info"><span>Тип:</span> На время</div>
                            <div class="text_header competition_info"> <img src="icons/clock.svg" alt=""> 12.04.2022 - 14.04.2022</div>
                            <div class="text_header competition_info"> <img src="icons/people.svg" alt=""> 24/26</div>
                            <button class="window_btn competition_btn" >Участвовать</button>
                            <div class="more"><a href="#" class="more_link">ПОДРОБНЕЕ</a></div>
                        </div>
                    </div>
                </div>
                <div class="teams_competitions">
                    <div class="competitions">
                        <div class="competition_item">
                            <div class="text_header competition_name">Умножение</div>
                                <div class="text_header competition_info"><span>Тип:</span> На время</div>
                                <div class="text_header competition_info"> <img src="icons/clock.svg" alt=""> 11.03.2022 - 12.03.2022</div>
                                <div class="text_header competition_info"> <img src="icons/people.svg" alt=""> 18/26</div>
                                <button class="window_btn competition_btn">Участвовать</button>
                                <div class="more"><a href="#" class="more_link">ПОДРОБНЕЕ</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="ends_competitions">
                    <div class="competitions">
                        <div class="competition_item">
                                <div class="text_header competition_name">Деление</div>
                                    <div class="text_header competition_info"><span>Тип:</span> На время</div>
                                    <div class="text_header competition_info"> <img src="icons/clock.svg" alt=""> 12.02.2022 - 13.02.2022</div>
                                    <div class="text_header competition_info"> <img src="icons/people.svg" alt=""> 25/26</div>
                                    <button class="window_btn competition_btn">Посмотреть результаты</button>
                                    <div class="more"><a href="#" class="more_link">ПОДРОБНЕЕ</a></div>
                                </div>
                        </div>
                    </div>
                </div>
                </div>
                

            </div>
        </section>

        <section id="section_ni1" class="profile">
            <? if ($user['photo'] == "no") { ?>
            <? } else { ?>
                <div class="p">
                    <img class="photo_profile" src="<? echo $user['photo'] ?>" alt="">
                    <div class="profile_level">21</div>
                    <img src="img/progress.svg" alt="" class="progress_img">
                </div>

            <? } ?>
            <a href="#" class="change_photo">+ Изменить фото</a>
            <div class="text_header profile_header"><? echo $user['login'] ?></div>
            <div class="wrap_profile">
                <input name="fio" type="text" class="window_input profile_input" disabled value="<? echo $user['f'] . " " . $user['i'] . " " . $user['o'] ?>">
                <label for="fio"><a class="edit" id="fio" href="#"><img src="icons/input/text.svg" alt=""></a></label>
            </div>
            <div class="edit_fio">
                <div class="wrap_profile">
                    <input name="f" type="text" class="window_input profile_input" disabled value="<? echo $user['f'] ?>">
                </div>
                <div class="wrap_profile">
                    <input name="i" type="text" class="window_input profile_input" disabled value="<? echo $user['i'] ?>">
                </div>
                <div class="wrap_profile">
                    <input name="o" type="text" class="window_input profile_input" disabled value="<? echo $user['o'] ?>">
                </div>
            </div>
            <div class="wrap_profile">
                <input name="email" type="text" class="window_input profile_input" disabled value="<? echo $user['email'] ?>">
                <label for="email"><a class="edit" id="email" href="#"><img src="icons/input/text.svg" alt=""></a></label>
            </div>
            <button id="save_info" class="save_btn">Сохранить</button>
            <a href="#" class="edit_pass">Изменить пароль</a>
            <div class="password_change">
                <div class="wrap_profile">
                    <input name="old_pass" type="password" class="window_input profile_input" placeholder="Введите старый пароль">
                </div>
                <div class="wrap_profile">
                    <input name="new_pass" type="password" class="window_input profile_input" placeholder="Введите новый пароль">
                </div>
                <button id="save_pass" class="save_btn">Сохранить</button>
            </div>
        </section>

        <section id="section_ni3" class="achieves">
            <div class="container">
            <div class="content_header">Мои достижения</div>
            <div class="progress">
                            <div class="received">
                                <img class="received_bg" src="img/line.svg" alt="">
                            </div>
                            <div class="unreceived"></div>
                        </div>
                        <div class="progress_info">получено 2 из 19 </div>
                        <div class="achieves_list">
                                    <div class="achieve_item">
                                        <div class="achieve_logo">
                                            <img src="img/achieve/1.svg" alt="" class="achieve_img">
                                        </div>
                                        <div class="achieve_info">
                                            <div class="achieve_name">ТЕПЕРЬ Я МАТЕМАТИЧЕСКИЙ БОЕЦ</div>
                                            <div class="achieve_descr">Примите участие в первом соревновании</div>
                                        </div>
                                    </div>
                                    <div class="achieve_item">
                                        <div class="achieve_logo">
                                            <img src="img/achieve/2.svg" alt="" class="achieve_img">
                                        </div>
                                        <div class="achieve_info">
                                            <div class="achieve_name">МЕГА-МОЗГ</div>
                                            <div class="achieve_descr">Одержите первую победу</div>
                                        </div>
                                    </div>
                        </div>
                        </div>
        </section>

        <section id="section_ni4" class="leaderships">
            <div class="content_header">Таблица лидеров</div>
            <div class="table">
            <img src="icons/Gold Medal.svg" class="gold" alt="">
            <img src="icons/Silver Medal.svg" class="silver" alt="">
            <img src="icons/Bronze Medal.svg" class="bronze" alt="">
                <div class="leader_item">
                <div class="mp">
                        <img src="img/photo_user/svetoch.jpg" alt="" class="mini_photo">
                    </div>
                    <div class="text_header window_header leader_login">svetoch</div>
                    <div class="lvl">
                        <img src="icons/profile/level.svg" alt="">
                        <div class="lvl_info">21</div>
                    </div>
                    <div class="exp">
                        <img src="icons/profile/exp.svg" alt="">
                        <div class="exp_info">1342</div>
                    </div>
                </div>
                <div class="leader_item">
                    <div class="mp">
                        <img src="img/photo_user/antEA.jpg" alt="" class="mini_photo">
                    </div>
                    <div class="text_header window_header leader_login">AntipovaEA</div>
                    <div class="lvl">
                        <img src="icons/profile/level.svg" alt="">
                        <div class="lvl_info">17</div>
                    </div>
                    <div class="exp">
                        <img src="icons/profile/exp.svg" alt="">
                        <div class="exp_info">1100</div>
                    </div>
                </div>
                <div class="leader_item">
                <div class="mp">
                        <img src="img/photo_user/mashaIvanchenko.jpg" alt="" class="mini_photo">
                    </div>
                    <div class="text_header window_header leader_login">SashaSergeeva</div>
                    <div class="lvl">
                        <img src="icons/profile/level.svg" alt="">
                        <div class="lvl_info">15</div>
                    </div>
                    <div class="exp">
                        <img src="icons/profile/exp.svg" alt="">
                        <div class="exp_info">1050</div>
                    </div>
                </div>
                <div class="leader_item">
                <div class="mp">
                        <img src="img/photo_user/chetvergov.jpg" alt="" class="mini_photo">
                    </div>
                    <div class="text_header window_header leader_login">chetvergov</div>
                    <div class="lvl">
                        <img src="icons/profile/level.svg" alt="">
                        <div class="lvl_info">10</div>
                    </div>
                    <div class="exp">
                        <img src="icons/profile/exp.svg" alt="">
                        <div class="exp_info">570</div>
                    </div>
                </div>
                <div class="leader_item">
                <div class="mp">
                        <img src="img/photo_user/liza.jpg" alt="" class="mini_photo">
                    </div>
                    <div class="text_header window_header leader_login">liza</div>
                    <div class="lvl">
                        <img src="icons/profile/level.svg" alt="">
                        <div class="lvl_info">9</div>
                    </div>
                    <div class="exp">
                        <img src="icons/profile/exp.svg" alt="">
                        <div class="exp_info">500</div>
                    </div>
                </div>
                <div class="leader_item">
                <div class="mp">
                        <img src="img/photo_user/morgun.jpg" alt="" class="mini_photo">
                    </div>
                    <div class="text_header window_header leader_login">morgun</div>
                    <div class="lvl">
                        <img src="icons/profile/level.svg" alt="">
                        <div class="lvl_info">8</div>
                    </div>
                    <div class="exp">
                        <img src="icons/profile/exp.svg" alt="">
                        <div class="exp_info">475</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section_ni5" class="my_teams">
            <div class="my_teams_header">Мои команды</div>
            <div class="teams_wrap">
                <div class="team_item">
                    <div class="team_name">ФИКСИКИ</div>
                    <div class="team_wins">
                        <img src="icons/teams/win.svg" alt="" class="wins_icon">
                        <div class="count_wins">8 побед</div>
                    </div>
                    <div class="team_members">
                        <div class="count_members">4</div>
                        <img src="icons/teams/members.svg" alt="" class="members_icon">
                    </div>
                    <div class="members">
                        <div class="members_head">
                            <img src="icons/teams/members_window.svg" alt="">
                            <div class="count_members">4</div>
                        </div>
                        <div class="members_item">
                            <div class="text_header window_header leader_login">admin</div>
                            <div class="lvl">
                                <img src="icons/teams/lvl.svg" alt="">
                                <div class="lvl_info">30</div>
                            </div>
                            <div class="exp">
                                <img src="icons/teams/exp.svg" alt="">
                                <div class="exp_info">1542</div>
                            </div>
                        </div>
                        <div class="members_item">
                            <div class="text_header window_header leader_login">chetvergov</div>
                            <div class="lvl">
                                <img src="icons/teams/lvl.svg" alt="">
                                <div class="lvl_info">21</div>
                            </div>
                            <div class="exp">
                                <img src="icons/teams/exp.svg" alt="">
                                <div class="exp_info">1342</div>
                            </div>
                        </div>
                        <div class="members_item">
                            <div class="text_header window_header leader_login">morgun</div>
                            <div class="lvl">
                                <img src="icons/teams/lvl.svg" alt="">
                                <div class="lvl_info">15</div>
                            </div>
                            <div class="exp">
                                <img src="icons/teams/exp.svg" alt="">
                                <div class="exp_info">1042</div>
                            </div>
                        </div>
                        <div class="members_item">
                            <div class="text_header window_header leader_login">liza</div>
                            <div class="lvl">
                                <img src="icons/teams/lvl.svg" alt="">
                                <div class="lvl_info">12</div>
                            </div>
                            <div class="exp">
                                <img src="icons/teams/exp.svg" alt="">
                                <div class="exp_info">742</div>
                            </div>
                        </div>
                        <img src="icons/teams/add_member.svg" alt="" class="add_member">
                    </div>
                </div>
            </div>
            <div class="add_team"><a class="add_team_link" href="">+ Добавить команду</a></div>
        </section>

        <section id="section_ni6" class="my_competition">
            <div class="container">
                <div class="my_teams_header">Мои соревнования</div>
                <div class="solo_competitions">
                    <div class="competitions">
                        <div class="competition_item">
                            <div class="text_header competition_name">Таблица умножения</div>
                            <div class="text_header competition_info"><span>Тип:</span> На время</div>
                            <div class="text_header competition_info"> <img src="icons/clock.svg" alt=""> 12.04.2022 - 14.04.2022</div>
                            <div class="text_header competition_info"> <img src="icons/people.svg" alt=""> 17/20</div>
                            <button class="window_btn competition_btn">Изменить</button>
                            <div class="more"><a href="#" class="more_link">ПОДРОБНЕЕ</a></div>
                        </div>
                    </div>
                </div>

                <div class="add_team"><a class="add_team_link" href="add_competition.php">+ Добавить соревнование</a></div>
            </div>
        </section>        

        <img src="icons/notification.svg" alt="" class="notification_bell">
        <div class="notifications">
            <div class="text_header notifications_header">Уведомления</div>
            <img src="icons/notification_bell.svg" alt="" class="notification_icon">
            <div class="notification_item">
                <div class="text_header notification_header">Вы успешно завершили соревнование </div>
                <div class="text_header notification_descr">Посмотрите результаты</div>
            </div>
            <!-- <div class="notification_item">
                <div class="text_header notification_header">Соревнование началось </div>
                <div class="text_header notification_descr">Пора решать задачи</div>
            </div> -->
            <div class="notification_item">
                <div class="text_header notification_header">Новое приглашение в команду </div>
                <div class="text_header notification_descr">Вас пригласили в команду "ФИКСИКИ"</div>
                <div class="notification_btns">
                    <button class="notification_btn agree">Принять</button>
                    <button class="notification_btn not_agree">Отклонить</button>
                </div>
            </div>
                <!-- <div class="notification_item">
                <div class="text_header notification_header">Новое приглашение в жюри </div>
                <div class="text_header notification_descr">Вас пригласили в команду жюри соревнования "ПОРЯДОК ДЕЙСТВИЙ"</div>
                <div class="notification_btns">
                    <button class="notification_btn agree">Принять</button>
                    <button class="notification_btn not_agree">Отклонить</button>
                </div>
            </div> -->
        </div>
        <img src="icons/arrow.svg" alt="" class="arrow">
        <div class="navigation">
            <div class="user">
                <img src="<? echo $user['photo'] ?>" alt="" class="mini_photo">
                <div class="text_header user_header"><? echo $user['login'] ?></div>
                <button class="window_btn logout_btn" onclick="window.location.href='logout.php#window_result'">Выйти</button>
                <img src="icons/arrow_back.svg" alt="" class="arrow_back">
            </div>
            <div class="list">
                <div id="ni1" class="nav_item">Профиль</div>
                <div id="ni2" class="nav_item nav_item_active">Соревнования</div>
                <div id="ni3" class="nav_item">Достижения</div>
                <div id="ni4" class="nav_item">Таблица лидеров</div>
                <div id="ni5" class="nav_item">Мои команды</div>
                <div id="ni6" class="nav_item">Мои соревнования</div>


            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="main_subheader">С нами математика стала ещё интереснее!</div>
    </footer>

    <script>
        $(".notification_bell").click(function(e) {
            e.preventDefault();
            $(".notifications").css('transform', 'translateX(0%)');
        });

        $(".arrow").click(function(e) {
            e.preventDefault();
            $(".navigation").css('transform', 'translateX(0%)');
            $(".arrow_back").css('transform', 'translateX(50%)');
        });

        $(".arrow_back").click(function(e) {
            e.preventDefault();
            $(".navigation").css('transform', 'translateX(-100%)');
            $(".arrow_back").css('transform', 'translateX(0%)');
        });

        $(document).click(function(e) {
            if ($(e.target).is('.content')) {
                $(".notifications").css('transform', 'translateX(100%)');
                $(".navigation").css('transform', 'translateX(-100%)');
                $(".arrow_back").css('transform', 'translateX(0%)');
            }
        });

        var i = "ni2";
        $(".nav_item").click(function(e) {
            e.preventDefault();
            $("#" + i).removeClass('nav_item_active');
            var navId = this.id;
            $("#" + navId).addClass('nav_item_active');
            $("#section_" + i).slideToggle("slow");
            i = navId;
            $("#section_" + navId).slideToggle("slow");
        });

        $(".ends_competition").click(function(e) {
            e.preventDefault();
            if ($(".teams_competitions").css('display') != "none") {
                $(".teams_competitions").slideToggle("slow");
            }
            if ($(".solo_competitions").css('display') != "none") {
                $(".solo_competitions").slideToggle("slow");
            }
            $(".ends_competitions").slideToggle("slow");
        });

        $(".solo").click(function(e) {
            e.preventDefault();
            if ($(".teams_competitions").css('display') != "none") {
                $(".teams_competitions").slideToggle("slow");
            }
            if ($(".ends_competitions").css('display') != "none") {
                $(".ends_competitions").slideToggle("slow");
            }
            $(".solo_competitions").slideToggle("slow");
        });

        $(".teams").click(function(e) {
            e.preventDefault();
            if ($(".solo_competitions").css('display') != "none") {
                $(".solo_competitions").slideToggle("slow");
            }
            if ($(".ends_competitions").css('display') != "none") {
                $(".ends_competitions").slideToggle("slow");
            }
            $(".teams_competitions").slideToggle("slow");
        });

        $(".edit_pass").click(function(e) {
            e.preventDefault();
            $(".password_change").slideToggle("slow");
        });

        $("#fio").click(function(e) {
            e.preventDefault();
            $(".edit_fio").slideToggle("slow");
            $('.edit_fio input').removeAttr('disabled');
        });

        $("#email").click(function(e) {
            e.preventDefault();
            $('input[name="email"]').removeAttr('disabled');
            $('input[name="email"]').focus();

        });

        $("input").focus(function(e) {
            e.preventDefault();
            var val = this.value;
            this.value = '';
            this.value = val;
        });

        $(".competition_btn").click(function (e) { 
            e.preventDefault();
            $(".competition_btn").css('background','green');
            $(".competition_btn").text("Вы записались");
        });

        $(".count_members").click(function (e) { 
            e.preventDefault();
            $(".members").slideToggle('slow');
        });


    </script>

<script>
        $(document).ready(function() {
            var rec = 2;
            var all = 19;
            var recprocent = (rec / all) * 100;
            var unrecprocent = 100 - recprocent;
            $('.unreceived').css({
                "width": unrecprocent + "%"
            });
            $('.received').css({
                "width": recprocent + "%"
            });
        });
    </script>

</body>

</html>