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
            <ul class="teams-list container-flex container-flex_grid article">
                <li class="teams-list__item container-flex__grid-item">
                    <article class="info-card teams-list__team team-card container-flex">
                        <section class="team-card__badge">
                            <div class="team-card__badge-img" style="background-image: url('/img/cska.png')"><div>
                        </section>
                        <div class="container-flex container-flex_col">
                            <h3 class="team-card__heading">ЦСКА</h3>
                            <p class="team-card__city">Москва</p>
                            <img src="" alt="" class="team-card__flag">
                            <p class="team-card__country">Россия</p>
                        </div>
                    </article>
                </li>
                <li class="teams-list__item container-flex__grid-item">
                    <article class="info-card teams-list__team team-card container-flex">
                        <section class="team-card__badge">
                            <div class="team-card__badge-img" style="background-image: url('/img/akbars.png')"><div>
                        </section>
                        <div class="container-flex container-flex_col">
                            <h3 class="team-card__heading">Ак Барс</h3>
                            <p class="team-card__city">Казань</p>
                            <img src="" alt="" class="team-card__flag">
                            <p class="team-card__country">Россия</p>
                        </div>
                    </article>
                </li>
                <li class="teams-list__item container-flex__grid-item">
                    <article class="info-card teams-list__team team-card container-flex">
                        <section class="team-card__badge">
                            <div class="team-card__badge-img" style="background-image: url('/img/dynamo.png')"><div>
                        </section>
                        <div class="container-flex container-flex_col">
                            <h3 class="team-card__heading">Динамо</h3>
                            <p class="team-card__city">Москва</p>
                            <img src="" alt="" class="team-card__flag">
                            <p class="team-card__country">Россия</p>
                        </div>
                    </article>
                </li>
                <li class="teams-list__item container-flex__grid-item">
                    <article class="info-card teams-list__team">

                    </article>
                </li>
                <li class="teams-list__item container-flex__grid-item">
                    <article class="info-card teams-list__team">

                    </article>
                </li>
                <li class="teams-list__item container-flex__grid-item">
                    <article class="info-card teams-list__team">

                    </article>
                </li>
                <li class="teams-list__item container-flex__grid-item">
                    <article class="info-card teams-list__team">

                    </article>
                </li>
                <li class="teams-list__item container-flex__grid-item">
                    <article class="info-card teams-list__team">

                    </article>
                </li>
                <li class="teams-list__item container-flex__grid-item">
                    <article class="info-card teams-list__team">

                    </article>
                </li>
                <li class="teams-list__item container-flex__grid-item">
                    <article class="info-card teams-list__team">

                    </article>
                </li>
            </ul>
        </main>
    </div>
    <?php
        require $blocks['footer'];
    ?>
</body>
</html>
