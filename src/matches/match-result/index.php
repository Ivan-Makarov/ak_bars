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
    <div class="content container-flex">
        <main class="main">
            <?php
                require $blocks['breadcrumbs'];
            ?>

            <section class="match-info container-flex">
                <article class="match-info__team container-flex container-flex_col">
                    <section class="match-info__team-badge">
                        <div class="match-info__team-badge-img" style="background-image: url('/img/cska.png')"></div>
                    </section>
                    <h3 class="match-info__team-name">ЦСКА</h3>
                    <p class="match-info__team-city">Москва</p>
                </article>

                <section class="match-info__info container-flex container-flex_col">
                    <section class="match-info__group-number">
                        Группа &laquo;<span class="match-info__group-value">A</span>&raquo; &mdash; №<span class="match-info__number-value">17</span>
                    </section>
                    <section class="match-info__score">12:3</section>
                    <section class="match-info__date-place">
                        <span class="match-info__date">25.12.2017</span> |
                        <span class="match-info__place">СК &laquo;Зилант&raquo;</span>
                    </section>
                    <p class="match-info__comment">Матч завершен</p>
                    <div class="container-flex container-flex_sb">
                        <a href="" class="link match-info__link">
                            Фото
                        </a>
                        <a href="" class="link match-info__link">
                            Видео
                        </a>
                    </div>
                </section>

                <article class="match-info__team container-flex container-flex_col">
                    <section class="match-info__team-badge">
                        <div class="match-info__team-badge-img" style="background-image: url('/img/torpedo.png')"></div>
                    </section>
                    <h3 class="match-info__team-name">Торпедо</h3>
                    <p class="match-info__team-city">Нижегородская область</p>
                </article>
            </section>

            <section class="match-stats container-flex container-flex_sb">
                <article class="match-stats__article">
                    <h3 class="match-stats__heading">
                        Статистика команд
                    </h3>
                    <table class="match-stats__table">
                        <thead class="match-stats__thead">
                            <th class="match-stats__th">Команда</th>
                            <th class="match-stats__th">№</th>
                            <th class="match-stats__th">И</th>
                            <th class="match-stats__th">В</th>
                            <th class="match-stats__th">П</th>
                            <th class="match-stats__th">РШ</th>
                            <th class="match-stats__th">О</th>
                        </thead>
                        <tbody class="match-stats__tbody">
                            <tr class="match-stats__tr">
                                <td class="match-stats__td">ЦСКА</td>
                                <td class="match-stats__td">1</td>
                                <td class="match-stats__td">10</td>
                                <td class="match-stats__td">10</td>
                                <td class="match-stats__td">0</td>
                                <td class="match-stats__td">50-3</td>
                                <td class="match-stats__td">30</td>
                            </tr>
                            <tr class="match-stats__tr">
                                <td class="match-stats__td">Торпедо НН</td>
                                <td class="match-stats__td">10</td>
                                <td class="match-stats__td">10</td>
                                <td class="match-stats__td">0</td>
                                <td class="match-stats__td">10</td>
                                <td class="match-stats__td">10-23</td>
                                <td class="match-stats__td">0</td>
                        </tbody>
                    </table>
                </article>
                <article class="match-stats__article">
                    <h3 class="match-stats__heading">
                        Счет по периодам
                    </h3>
                    <table class="match-stats__table">
                        <thead class="match-stats__thead">
                            <th class="match-stats__th">Команда</th>
                            <th class="match-stats__th">1</th>
                            <th class="match-stats__th">2</th>
                            <th class="match-stats__th">3</th>
                            <th class="match-stats__th">Всего</th>
                        </thead>
                        <tbody class="match-stats__tbody">
                            <tr class="match-stats__tr">
                                <td class="match-stats__td">ЦСКА</td>
                                <td class="match-stats__td">1</td>
                                <td class="match-stats__td">5</td>
                                <td class="match-stats__td">6</td>
                                <td class="match-stats__td">12</td>
                            </tr>
                            <tr class="match-stats__tr">
                                <td class="match-stats__td">Торпедо НН</td>
                                <td class="match-stats__td">1</td>
                                <td class="match-stats__td">1</td>
                                <td class="match-stats__td">1</td>
                                <td class="match-stats__td">3</td>
                            </tr>
                        </tbody>
                    </table>
                </article>
                <article class="match-stats__article">
                    <h3 class="match-stats__heading">
                        Броски в створ ворот
                    </h3>
                    <table class="match-stats__table">
                        <thead class="match-stats__thead">
                            <th class="match-stats__th">Команда</th>
                            <th class="match-stats__th">1</th>
                            <th class="match-stats__th">2</th>
                            <th class="match-stats__th">3</th>
                            <th class="match-stats__th">Всего</th>
                        </thead>
                        <tbody class="match-stats__tbody">
                            <tr class="match-stats__tr">
                                <td class="match-stats__td">ЦСКА</td>
                                <td class="match-stats__td">10</td>
                                <td class="match-stats__td">20</td>
                                <td class="match-stats__td">30</td>
                                <td class="match-stats__td">60</td>
                            </tr>
                            <tr class="match-stats__tr">
                                <td class="match-stats__td">Торпедо НН</td>
                                <td class="match-stats__td">5</td>
                                <td class="match-stats__td">5</td>
                                <td class="match-stats__td">5</td>
                                <td class="match-stats__td">15</td>
                            </tr>
                        </tbody>
                    </table>
                </article>
            </section>
            <a href="" class="extra-stats">Расширенная статистика матча</a>
        </main>
    </div>
    <?php
        require $blocks['footer'];
    ?>
</body>
</html>
