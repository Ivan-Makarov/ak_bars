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
                <section class="match-info match-info_match-preview container-flex">
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
                        <section class="match-info__time">10:30</section>
                        <section class="match-info__date-place">
                            <span class="match-info__date">25.12.2017</span> |
                            <span class="match-info__place">СК &laquo;Зилант&raquo;</span>
                        </section>
                        <button class="button match-info__button">Смотреть трансляцию</button>
                    </section>

                    <article class="match-info__team container-flex container-flex_col">
                        <section class="match-info__team-badge">
                            <div class="match-info__team-badge-img" style="background-image: url('/img/torpedo.png')"></div>
                        </section>
                        <h3 class="match-info__team-name">Торпедо</h3>
                        <p class="match-info__team-city">Нижегородская область</p>
                    </article>
                </section>
            </main>
        </div>
    </div>
    <?php
        require $blocks['footer'];
    ?>
</body>
</html>
