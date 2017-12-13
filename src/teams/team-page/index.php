<!DOCTYPE html>
<html lang="ru">

<?php
    require $_SERVER['DOCUMENT_ROOT'].'/blocks/blocks.php';
    require $blocks['head'];
?>

<body class="body">
    <?php
        require $blocks['header'];
    ?>
    <div class="content">
        <h2 class="heading page-heading">
            Команды
        </h2>
    </div>
    <div class="main-bg">
        <div class="content container-flex">
            <main class="main">
                <?php
                    require $blocks['breadcrumbs'];
                ?>
                <section class="team-brief container-flex container-flex_sb">
                    <div class="container-flex">
                        <section class="team-brief__team-badge">
                            <div class="team-brief__badge-img" style="background-image: url('/img/cska.png')"></div>
                        </section>
                        <section class="team-brief__main container-flex container-flex_col">
                            <h3 class="team-brief__team-name">ЦСКА</h3>
                            <p class="team-brief__city">Москва</p>
                            <img src="" alt="" class="team-brief__flag">
                            <p class="team-brief__country">Россия</p>
                            <p class="team-brief__place">
                                <span class="team-brief__place-value">1</span> место
                            </p>
                        </section>
                    </div>
                    <section class="team-brief__info">
                        <h4 class="team-brief__info-heading">
                            Статистика команды
                        </h4>
                        <table class="team-brief__info-table">
                            <tr class="team-brief__info-tr">
                                <th class="team-brief__info-th">Год создания</th>
                                <td class="team-brief__info-td">1911</td>
                            </tr>
                            <tr class="team-brief__info-tr">
                                <th class="team-brief__info-th">Тренер</th>
                                <td class="team-brief__info-td">Тренер Тренерович Тренеров</td>
                            </tr>
                            <tr class="team-brief__info-tr">
                                <th class="team-brief__info-th">Контакты</th>
                                <td class="team-brief__info-td">
                                    <a href="tel:+79261112233" class="link">+7 926 111-22-33</a>
                                </td>
                            </tr>
                            <tr class="team-brief__info-tr">
                                <th class="team-brief__info-th">Веб</th>
                                <td class="team-brief__info-td">
                                    <a href="http://google.com" class="link">google.com</a>
                                </td>
                            </tr>
                            <tr class="team-brief__info-tr">
                                <th class="team-brief__info-th">Почта</th>
                                <td class="team-brief__info-td">
                                    <a href="mailto:mail@mail.com" class="link">mail@mail.com</a>
                                </td>
                            </tr>
                        </table>
                    </section>
                </section>
                <section class="team-details container-flex container-flex_sb container_grid">
                    <div class="container-flex container-flex_col team-details__main-col container-flex_grid-item">
                        <article class="team-details__article">
                            <h4 class="team-details__heading">
                                Вратари
                            </h4>
                            <table class="table team-details__table">
                                <thead class="team-details__thead">
                                    <tr class="team-details__tr">
                                        <th class="table__head-item team-details__th">ФИО</th>
                                        <th class="table__head-item team-details__th">Амп</th>
                                        <th class="table__head-item team-details__th">И</th>
                                        <th class="table__head-item team-details__th">Мин</th>
                                        <th class="table__head-item team-details__th">Г</th>
                                        <th class="table__head-item team-details__th">Бр</th>
                                        <th class="table__head-item team-details__th">%</th>
                                        <th class="table__head-item team-details__th">Ср</th>
                                        <th class="table__head-item team-details__th">В</th>
                                        <th class="table__head-item team-details__th">На 0</th>
                                    </tr>
                                </thead>
                                <tbody class="team-details__tbody">
                                    <tr class="team-details__tr">
                                        <td class="table__item team-details__td">Игрок Игроков</td>
                                        <td class="table__item team-details__td">Вр</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                    </tr>
                                    <tr class="team-details__tr">
                                        <td class="table__item team-details__td">Игрок Игроков</td>
                                        <td class="table__item team-details__td">Вр</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                    </tr>
                                </tbody>
                            </table>
                        </article>
                        <article class="team-details__article">
                            <h4 class="team-details__heading">
                                Полевые игроки
                            </h4>
                            <table class="table team-details__table">
                                <thead class="team-details__thead">
                                    <tr class="team-details__tr">
                                        <th class="table__head-item team-details__th">ФИО</th>
                                        <th class="table__head-item team-details__th">Амп</th>
                                        <th class="table__head-item team-details__th">И</th>
                                        <th class="table__head-item team-details__th">О</th>
                                        <th class="table__head-item team-details__th">О ср.</th>
                                        <th class="table__head-item team-details__th">Бр</th>
                                        <th class="table__head-item team-details__th">ГП</th>
                                        <th class="table__head-item team-details__th">Шт</th>
                                    </tr>
                                </thead>
                                <tbody class="team-details__tbody">
                                    <tr class="team-details__tr">
                                        <td class="table__item team-details__td">Игрок Игроков</td>
                                        <td class="table__item team-details__td">Вр</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                    </tr>
                                    <tr class="team-details__tr">
                                        <td class="table__item team-details__td">Игрок Игроков</td>
                                        <td class="table__item team-details__td">Вр</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                        <td class="table__item team-details__td">12</td>
                                    </tr>
                                </tbody>
                            </table>
                        </article>
                    </div>
                    <div class="container-flex_grid-item team-details__side-col">
                        <article class="team-details__article">
                            <h4 class="team-details__heading">
                                Статистика команды
                            </h4>
                            <table class="table team-details__table">
                                <tr class="team-details__tr">
                                    <th colspan="2" class="table__head-item team-details__th">Место</th>
                                    <td class="table__head-item team-details__th team-details__th_center">
                                        <span class="team-details__place">1</span> из
                                        <span class="team-details__total-places">6</span>
                                    </td>
                                </tr>
                                <tr class="team-details__tr">
                                    <th colspan="2" class="table__item team-details__td team-details__td_strong">Матчи</th>
                                    <td class="table__item team-details__td">100</td>
                                </tr>
                                <tr class="team-details__tr">
                                    <th class="table__item team-details__td team-details__td_strong">Победы</th>
                                    <td class="table__item team-details__td">100</td>
                                    <td class="table__item team-details__td">100%</td>
                                </tr>
                                <tr class="team-details__tr">
                                    <th class="table__item team-details__td team-details__td_strong">Ничьи</th>
                                    <td class="table__item team-details__td">0</td>
                                    <td class="table__item team-details__td">0%</td>
                                </tr>
                                <tr class="team-details__tr">
                                    <th class="table__item team-details__td team-details__td_strong">Поражения</th>
                                    <td class="table__item team-details__td">0</td>
                                    <td class="table__item team-details__td">0%</td>
                                </tr>
                                <tr class="team-details__tr">
                                    <th class="table__item team-details__td team-details__td_strong">Забито шайб</th>
                                    <td class="table__item team-details__td">1000</td>
                                    <td class="table__item team-details__td">10 ср.</td>
                                </tr>
                                <tr class="team-details__tr">
                                    <th class="table__item team-details__td team-details__td_strong">Пропущено шайб</th>
                                    <td class="table__item team-details__td">0</td>
                                    <td class="table__item team-details__td">0 ср.</td>
                                </tr>
                                <tr class="team-details__tr">
                                    <th class="table__item team-details__td team-details__td_strong">Разница шайб</th>
                                    <td class="table__item team-details__td">1000</td>
                                    <td class="table__item team-details__td">10 ср.</td>
                                </tr>
                                <tr class="team-details__tr">
                                    <th class="table__item team-details__td team-details__td_strong">Штраф</th>
                                    <td class="table__item team-details__td">100 мин</td>
                                    <td class="table__item team-details__td">10 ср.</td>
                                </tr>
                            </table>
                            <a href="" class="extra-stats">Расширенная статистика команды</a>
                        </article>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <?php
        require $blocks['footer'];
    ?>
</body>
</html>
