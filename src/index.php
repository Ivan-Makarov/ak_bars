<!DOCTYPE html>
<html lang="ru">

<?php
    require $_SERVER['DOCUMENT_ROOT'].'/blocks/blocks.php';
    require $blocks['head'];
    $modifier = 'index';
?>

<body class="body">
    <?php
        require $blocks['header'];
    ?>
    <main class="main">
        <div class="all-width-stripe all-width-stripe_<?= $modifier ?>">
            <div class="content container-flex">
                <section class="top-stats"></section>
                <?php
                    require $blocks['tournament'];
                ?>
            </div>
        </div>
        <div class="content">
            <div class="container-flex">
                <section class="index__news">
                    <h3 class="heading section-heading">
                        Новости
                    </h3>
                    <ul class="news-list container-flex container-flex_grid article">
                        <li class="news-list__item container-flex__grid-item">
                            <article class="news-preview">
                                <section class="news-preview__image-container container-flex">
                                    <img src="/img/slider-1.jpg" alt="" class="news-preview__image">
                                </section>
                                <h3 class="news-preview__heading">
                                    Длинное название новости в&nbsp;две или три строки с&nbsp;фиксированным  размером по&nbsp;высоте
                                </h3>
                                <p class="news-preview__text">
                                    Перед стартом нового сезона &laquo;Академия хоккея Ак&nbsp;Барс&raquo; проведёт аттестацию всех тренеров СДЮСШ &laquo;Ак&nbsp;Барс&raquo;, ДЮСШ &laquo;Нефтяник&raquo; и&nbsp;ДЮСШ &laquo;Динамо&raquo;.
                                </p>
                                <div class="container-flex container-flex_sb">
                                    <section class="news-preview__date">25.12.2017</section>
                                    <a href="/news/news-article/" class="link news-preview__more">Читать дальше &raquo;</a>
                                </div>
                            </article>
                        </li>
                        <li class="news-list__item container-flex__grid-item">
                            <article class="news-preview">
                                <section class="news-preview__image-container container-flex">
                                    <img src="/img/slider-1.jpg" alt="" class="news-preview__image">
                                </section>
                                <h3 class="news-preview__heading">
                                    Длинное название новости в&nbsp;две или три строки с&nbsp;фиксированным  размером по&nbsp;высоте
                                </h3>
                                <p class="news-preview__text">
                                    Перед стартом нового сезона &laquo;Академия хоккея Ак&nbsp;Барс&raquo; проведёт аттестацию всех тренеров СДЮСШ &laquo;Ак&nbsp;Барс&raquo;, ДЮСШ &laquo;Нефтяник&raquo; и&nbsp;ДЮСШ &laquo;Динамо&raquo;.
                                </p>
                                <div class="container-flex container-flex_sb">
                                    <section class="news-preview__date">25.12.2017</section>
                                    <a href="/news/news-article/" class="link news-preview__more">Читать дальше &raquo;</a>
                                </div>
                            </article>
                        </li>
                        <li class="news-list__item container-flex__grid-item">
                            <article class="news-preview">
                                <section class="news-preview__image-container container-flex">
                                    <img src="/img/slider-1.jpg" alt="" class="news-preview__image">
                                </section>
                                <h3 class="news-preview__heading">
                                    Длинное название новости в&nbsp;две или три строки с&nbsp;фиксированным  размером по&nbsp;высоте
                                </h3>
                                <p class="news-preview__text">
                                    Перед стартом нового сезона &laquo;Академия хоккея Ак&nbsp;Барс&raquo; проведёт аттестацию всех тренеров СДЮСШ &laquo;Ак&nbsp;Барс&raquo;, ДЮСШ &laquo;Нефтяник&raquo; и&nbsp;ДЮСШ &laquo;Динамо&raquo;.
                                </p>
                                <div class="container-flex container-flex_sb">
                                    <section class="news-preview__date">25.12.2017</section>
                                    <a href="/news/news-article/" class="link news-preview__more">Читать дальше &raquo;</a>
                                </div>
                            </article>
                        </li>
                        <li class="news-list__item container-flex__grid-item">
                            <article class="news-preview">
                                <section class="news-preview__image-container container-flex">
                                    <img src="/img/slider-1.jpg" alt="" class="news-preview__image">
                                </section>
                                <h3 class="news-preview__heading">
                                    Длинное название новости в&nbsp;две или три строки с&nbsp;фиксированным  размером по&nbsp;высоте
                                </h3>
                                <p class="news-preview__text">
                                    Перед стартом нового сезона &laquo;Академия хоккея Ак&nbsp;Барс&raquo; проведёт аттестацию всех тренеров СДЮСШ &laquo;Ак&nbsp;Барс&raquo;, ДЮСШ &laquo;Нефтяник&raquo; и&nbsp;ДЮСШ &laquo;Динамо&raquo;.
                                </p>
                                <div class="container-flex container-flex_sb">
                                    <section class="news-preview__date">25.12.2017</section>
                                    <a href="/news/news-article/" class="link news-preview__more">Читать дальше &raquo;</a>
                                </div>
                            </article>
                        </li>
                    </ul>
                </section>
                <?php
                    $sn_modifier = 'social-networks_index';
                    require $blocks['social-networks']
                ?>
            </div>
        </div>
    </main>
    <?php
        require $blocks['footer'];
    ?>
</body>
</html>
