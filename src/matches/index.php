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
            Календарь игр
        </h2>
    </div>
    <div class="main-bg">
        <div class="content container-flex">
            <main class="main">
                <?php
                    require $blocks['breadcrumbs'];
                ?>
                <article class="matchday article">
                    <h3 class="heading section-heading">
                        Среда, 27 декабря
                    </h3>
                    <ol class="matchday__matches container-flex container-flex_grid">
                        <li class="container-flex__grid-item matchday__match-container">
                            <a href="/matches/match-preview" class="link-container">
                                <article class="match-card info-card container-flex">
                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/cska.png')"></section>
                                        <p class="team-badge__name match-card__team-name">ЦСКА</p>
                                        <p class="team-badge__from  match-card__team-from">Москва</p>
                                    </section>

                                    <section class="match-card__info container-flex container-flex_col">
                                        <section class="match-card__number">
                                            № <span class="match-card__number-value">15</span>
                                        </section>
                                        <section class="match-card__time">
                                            19:00
                                            <div class="match-card__time-zone">
                                                Мск
                                            </div>
                                        </section>
                                    </section>

                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/akbars.png')"></section>
                                        <p class="team-badge__name match-card__team-name">Академия Ак Барс</p>
                                        <p class="team-badge__from match-card__team-from">Казань</p>
                                    </section>
                                </article>
                            </a>
                        </li>
                        <li class="container-flex__grid-item matchday__match-container">
                            <a href="/matches/match-preview" class="link-container">
                                <article class="match-card info-card container-flex">
                                    <section class="team-badge match-card__team container-flex container-flex_col">
                                        <section class="team-badge__img" style="background-image: url('/img/cska.png')"></section>
                                        <p class="team-badge__name match-card__team-name">ЦСКА</p>
                                        <p class="team-badge__from  match-card__team-from">Москва</p>
                                    </section>

                                    <section class="match-card__info container-flex container-flex_col">
                                        <section class="match-card__number">
                                            № <span class="match-card__number-value">14</span>
                                        </section>
                                        <section class="match-card__time">
                                            19:00
                                            <div class="match-card__time-zone">
                                                Мск
                                            </div>
                                        </section>
                                    </section>

                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/akbars.png')"></section>
                                        <p class="team-badge__name match-card__team-name">Академия Ак Барс</p>
                                        <p class="team-badge__from match-card__team-from">Казань</p>
                                    </section>
                                </article>
                            </a>
                        </li>
                        <li class="container-flex__grid-item matchday__match-container">
                            <a href="/matches/match-preview" class="link-container">
                                <article class="match-card info-card container-flex">
                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/cska.png')"></section>
                                        <p class="team-badge__name match-card__team-name">ЦСКА</p>
                                        <p class="team-badge__from  match-card__team-from">Москва</p>
                                    </section>

                                    <section class="match-card__info container-flex container-flex_col">
                                        <section class="match-card__number">
                                            № <span class="match-card__number-value">13</span>
                                        </section>
                                        <section class="match-card__time">
                                            19:00
                                            <div class="match-card__time-zone">
                                                Мск
                                            </div>
                                        </section>
                                    </section>

                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/akbars.png')"></section>
                                        <p class="team-badge__name match-card__team-name">Академия Ак Барс</p>
                                        <p class="team-badge__from match-card__team-from">Казань</p>
                                    </section>
                                </article>
                            </a>
                        </li>
                        <li class="container-flex__grid-item matchday__match-container">
                            <a href="/matches/match-preview" class="link-container">
                                <article class="match-card info-card container-flex">
                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/cska.png')"></section>
                                        <p class="team-badge__name match-card__team-name">ЦСКА</p>
                                        <p class="team-badge__from  match-card__team-from">Москва</p>
                                    </section>

                                    <section class="match-card__info container-flex container-flex_col">
                                        <section class="match-card__number">
                                            № <span class="match-card__number-value">12</span>
                                        </section>
                                        <section class="match-card__time">
                                            19:00
                                            <div class="match-card__time-zone">
                                                Мск
                                            </div>
                                        </section>
                                    </section>

                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/akbars.png')"></section>
                                        <p class="team-badge__name match-card__team-name">Академия Ак Барс</p>
                                        <p class="team-badge__from match-card__team-from">Казань</p>
                                    </section>
                                </article>
                            </a>
                        </li>
                        <li class="container-flex__grid-item matchday__match-container">
                            <a href="/matches/match-preview" class="link-container">
                                <article class="match-card info-card container-flex">
                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/cska.png')"></section>
                                        <p class="team-badge__name match-card__team-name">ЦСКА</p>
                                        <p class="team-badge__from  match-card__team-from">Москва</p>
                                    </section>

                                    <section class="match-card__info container-flex container-flex_col">
                                        <section class="match-card__number">
                                            № <span class="match-card__number-value">11</span>
                                        </section>
                                        <section class="match-card__time">
                                            19:00
                                            <div class="match-card__time-zone">
                                                Мск
                                            </div>
                                        </section>
                                    </section>

                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/akbars.png')"></section>
                                        <p class="team-badge__name match-card__team-name">Академия Ак Барс</p>
                                        <p class="team-badge__from match-card__team-from">Казань</p>
                                    </section>
                                </article>
                            </a>
                        </li>
                    </ol>
                </article>
                <article class="matchday article">
                    <h3 class="heading section-heading">
                        Вторник, 26 декабря
                    </h3>
                    <ol class="matchday__matches container-flex container-flex_grid">
                        <li class="container-flex__grid-item matchday__match-container">
                            <a href="/matches/match-preview" class="link-container">
                                <article class="match-card info-card container-flex">
                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/cska.png')"></section>
                                        <p class="team-badge__name match-card__team-name">ЦСКА</p>
                                        <p class="team-badge__from  match-card__team-from">Москва</p>
                                    </section>

                                    <section class="match-card__info container-flex container-flex_col">
                                        <section class="match-card__number">
                                            № <span class="match-card__number-value">10</span>
                                        </section>
                                        <section class="match-card__time">
                                            19:00
                                            <div class="match-card__time-zone">
                                                Мск
                                            </div>
                                        </section>
                                    </section>

                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/akbars.png')"></section>
                                        <p class="team-badge__name match-card__team-name">Академия Ак Барс</p>
                                        <p class="team-badge__from match-card__team-from">Казань</p>
                                    </section>
                                </article>
                            </a>
                        </li>
                        <li class="container-flex__grid-item matchday__match-container">
                            <a href="/matches/match-preview" class="link-container">
                                <article class="match-card info-card container-flex">
                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/cska.png')"></section>
                                        <p class="team-badge__name match-card__team-name">ЦСКА</p>
                                        <p class="team-badge__from  match-card__team-from">Москва</p>
                                    </section>

                                    <section class="match-card__info container-flex container-flex_col">
                                        <section class="match-card__number">
                                            № <span class="match-card__number-value">9</span>
                                        </section>
                                        <section class="match-card__time">
                                            19:00
                                            <div class="match-card__time-zone">
                                                Мск
                                            </div>
                                        </section>
                                    </section>

                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/akbars.png')"></section>
                                        <p class="team-badge__name match-card__team-name">Академия Ак Барс</p>
                                        <p class="team-badge__from match-card__team-from">Казань</p>
                                    </section>
                                </article>
                            </a>
                        </li>
                        <li class="container-flex__grid-item matchday__match-container">
                            <a href="/matches/match-preview" class="link-container">
                                <article class="match-card info-card container-flex">
                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/cska.png')"></section>
                                        <p class="team-badge__name match-card__team-name">ЦСКА</p>
                                        <p class="team-badge__from  match-card__team-from">Москва</p>
                                    </section>

                                    <section class="match-card__info container-flex container-flex_col">
                                        <section class="match-card__number">
                                            № <span class="match-card__number-value">8</span>
                                        </section>
                                        <section class="match-card__time">
                                            19:00
                                            <div class="match-card__time-zone">
                                                Мск
                                            </div>
                                        </section>
                                    </section>

                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/akbars.png')"></section>
                                        <p class="team-badge__name match-card__team-name">Академия Ак Барс</p>
                                        <p class="team-badge__from match-card__team-from">Казань</p>
                                    </section>
                                </article>
                            </a>
                        </li>
                        <li class="container-flex__grid-item matchday__match-container">
                            <a href="/matches/match-preview" class="link-container">
                                <article class="match-card info-card container-flex">
                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/cska.png')"></section>
                                        <p class="team-badge__name match-card__team-name">ЦСКА</p>
                                        <p class="team-badge__from  match-card__team-from">Москва</p>
                                    </section>

                                    <section class="match-card__info container-flex container-flex_col">
                                        <section class="match-card__number">
                                            № <span class="match-card__number-value">7</span>
                                        </section>
                                        <section class="match-card__time">
                                            19:00
                                            <div class="match-card__time-zone">
                                                Мск
                                            </div>
                                        </section>
                                    </section>

                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/akbars.png')"></section>
                                        <p class="team-badge__name match-card__team-name">Академия Ак Барс</p>
                                        <p class="team-badge__from match-card__team-from">Казань</p>
                                    </section>
                                </article>
                            </a>
                        </li>
                        <li class="container-flex__grid-item matchday__match-container">
                            <a href="/matches/match-preview" class="link-container">
                                <article class="match-card info-card container-flex">
                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/cska.png')"></section>
                                        <p class="team-badge__name match-card__team-name">ЦСКА</p>
                                        <p class="team-badge__from  match-card__team-from">Москва</p>
                                    </section>

                                    <section class="match-card__info container-flex container-flex_col">
                                        <section class="match-card__number">
                                            № <span class="match-card__number-value">6</span>
                                        </section>
                                        <section class="match-card__time">
                                            19:00
                                            <div class="match-card__time-zone">
                                                Мск
                                            </div>
                                        </section>
                                    </section>

                                    <section class="team-badge match-card__team container-flex container-flex_col" >
                                        <section class="team-badge__img" style="background-image: url('/img/akbars.png')"></section>
                                        <p class="team-badge__name match-card__team-name">Академия Ак Барс</p>
                                        <p class="team-badge__from match-card__team-from">Казань</p>
                                    </section>
                                </article>
                            </a>
                        </li>
                    </ol>
                </article>
                <article class="matchday article">
                    <h3 class="heading section-heading">
                        Понедельник, 25 декабря
                    </h3>
                    <ol class="matchday__matches container-flex container-flex_grid">
                        <li class="container-flex__grid-item matchday__match-container">
                            <article class="match-card info-card container-flex">
                                <section class="team-badge match-card__team container-flex container-flex_col" >
                                    <section class="team-badge__img" style="background-image: url('/img/pirati.png')"></section>
                                    <p class="team-badge__name match-card__team-name">HK Pirati</p>
                                    <p class="team-badge__from  match-card__team-from">Рига</p>
                                </section>

                                <section class="match-card__info container-flex container-flex_col">
                                    <section class="match-card__number">
                                        № <span class="match-card__number-value">5</span>
                                    </section>
                                    <section class="match-card__score">
                                        10:1
                                    </section>
                                    <section class="match-card__links">
                                        <a href="/matches/match-result" class="link match-card__link">Протокол</a>
                                        <a href="" class="link match-card__link">Фото</a>
                                        <a href="" class="link match-card__link">Видео</a>
                                    </section>
                                </section>

                                <section class="team-badge match-card__team container-flex container-flex_col" >
                                    <section class="team-badge__img" style="background-image: url('/img/dynamo.png')"></section>
                                    <p class="team-badge__name match-card__team-name">Динамо</p>
                                    <p class="team-badge__from match-card__team-from">Москва</p>
                                </section>
                            </article>
                        </li>
                        <li class="container-flex__grid-item matchday__match-container">
                            <article class="match-card info-card container-flex">
                                <section class="team-badge match-card__team container-flex container-flex_col" >
                                    <section class="team-badge__img" style="background-image: url('/img/pirati.png')"></section>
                                    <p class="team-badge__name match-card__team-name">HK Pirati</p>
                                    <p class="team-badge__from  match-card__team-from">Рига</p>
                                </section>

                                <section class="match-card__info container-flex container-flex_col">
                                    <section class="match-card__number">
                                        № <span class="match-card__number-value">4</span>
                                    </section>
                                    <section class="match-card__score">
                                        10:1
                                    </section>
                                    <section class="match-card__links">
                                        <a href="/matches/match-result" class="link match-card__link">Протокол</a>
                                        <a href="" class="link match-card__link">Фото</a>
                                        <a href="" class="link match-card__link">Видео</a>
                                    </section>
                                </section>

                                <section class="team-badge match-card__team container-flex container-flex_col" >
                                    <section class="team-badge__img" style="background-image: url('/img/dynamo.png')"></section>
                                    <p class="team-badge__name match-card__team-name">Динамо</p>
                                    <p class="team-badge__from match-card__team-from">Москва</p>
                                </section>
                            </article>
                        </li>
                        <li class="container-flex__grid-item matchday__match-container">
                            <article class="match-card info-card container-flex">
                                <section class="team-badge match-card__team container-flex container-flex_col" >
                                    <section class="team-badge__img" style="background-image: url('/img/pirati.png')"></section>
                                    <p class="team-badge__name match-card__team-name">HK Pirati</p>
                                    <p class="team-badge__from  match-card__team-from">Рига</p>
                                </section>

                                <section class="match-card__info container-flex container-flex_col">
                                    <section class="match-card__number">
                                        № <span class="match-card__number-value">3</span>
                                    </section>
                                    <section class="match-card__score">
                                        10:1
                                    </section>
                                    <section class="match-card__links">
                                        <a href="/matches/match-result" class="link match-card__link">Протокол</a>
                                        <a href="" class="link match-card__link">Фото</a>
                                        <a href="" class="link match-card__link">Видео</a>
                                    </section>
                                </section>

                                <section class="team-badge match-card__team container-flex container-flex_col" >
                                    <section class="team-badge__img" style="background-image: url('/img/dynamo.png')"></section>
                                    <p class="team-badge__name match-card__team-name">Динамо</p>
                                    <p class="team-badge__from match-card__team-from">Москва</p>
                                </section>
                            </article>
                        </li>
                        <li class="container-flex__grid-item matchday__match-container">
                            <article class="match-card info-card container-flex">
                                <section class="team-badge match-card__team container-flex container-flex_col" >
                                    <section class="team-badge__img" style="background-image: url('/img/pirati.png')"></section>
                                    <p class="team-badge__name match-card__team-name">HK Pirati</p>
                                    <p class="team-badge__from  match-card__team-from">Рига</p>
                                </section>

                                <section class="match-card__info container-flex container-flex_col">
                                    <section class="match-card__number">
                                        № <span class="match-card__number-value">2</span>
                                    </section>
                                    <section class="match-card__score">
                                        10:1
                                    </section>
                                    <section class="match-card__links">
                                        <a href="/matches/match-result" class="link match-card__link">Протокол</a>
                                        <a href="" class="link match-card__link">Фото</a>
                                        <a href="" class="link match-card__link">Видео</a>
                                    </section>
                                </section>

                                <section class="team-badge match-card__team container-flex container-flex_col" >
                                    <section class="team-badge__img" style="background-image: url('/img/dynamo.png')"></section>
                                    <p class="team-badge__name match-card__team-name">Динамо</p>
                                    <p class="team-badge__from match-card__team-from">Москва</p>
                                </section>
                            </article>
                        </li>
                        <li class="container-flex__grid-item matchday__match-container">
                            <article class="match-card info-card container-flex">
                                <section class="team-badge match-card__team container-flex container-flex_col" >
                                    <section class="team-badge__img" style="background-image: url('/img/pirati.png')"></section>
                                    <p class="team-badge__name match-card__team-name">HK Pirati</p>
                                    <p class="team-badge__from  match-card__team-from">Рига</p>
                                </section>

                                <section class="match-card__info container-flex container-flex_col">
                                    <section class="match-card__number">
                                        № <span class="match-card__number-value">1</span>
                                    </section>
                                    <section class="match-card__score">
                                        10:1
                                    </section>
                                    <section class="match-card__links">
                                        <a href="/matches/match-result" class="link match-card__link">Протокол</a>
                                        <a href="" class="link match-card__link">Фото</a>
                                        <a href="" class="link match-card__link">Видео</a>
                                    </section>
                                </section>

                                <section class="team-badge match-card__team container-flex container-flex_col" >
                                    <section class="team-badge__img" style="background-image: url('/img/dynamo.png')"></section>
                                    <p class="team-badge__name match-card__team-name">Динамо</p>
                                    <p class="team-badge__from match-card__team-from">Москва</p>
                                </section>
                            </article>
                        </li>
                    </ol>
                </article>
            </main>
            <?php
                require $blocks['aside'];
            ?>
        </div>
    </div>
    <?php
        require($blocks['footer']);
    ?>
</body>
</html>
