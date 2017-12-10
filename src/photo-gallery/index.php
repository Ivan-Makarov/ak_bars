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

    <main class="main">
        <div class="content">
            <h2 class="heading section-heading video-section__heading">
                Фотогалерея
            </h2>
            <?php
                require $blocks['breadcrumbs'];
            ?>
            <article>
                <h3 class="heading section-heading">Вторник, 26 декабря</h3>
                <section class="container-flex container-flex_sb gallery">
                    <article class="album-preview album-preview_gallery gallery__item" style="background-image: url('/img/slider-1.jpg')">
                        <a href="" class="album-preview__info container-flex container-flex_col">
                            <span class="album-preview__button">+</span>
                            <h4 class="album-preview__heading">Небольшое название фотоальбома в две строки</h4>
                            <section class="album-preview__number">
                                <span class="album-preview__number-value">15</span>
                                <span class="album-preview__number-unit">фотографий</span>
                            </section>
                        </a>
                    </article>
                    <article class="album-preview album-preview_gallery gallery__item" style="background-image: url('/img/slider-1.jpg')">
                        <a href="" class="album-preview__info container-flex container-flex_col">
                            <span class="album-preview__button">+</span>
                            <h4 class="album-preview__heading">Небольшое название фотоальбома в две строки</h4>
                            <section class="album-preview__number">
                                <span class="album-preview__number-value">15</span>
                                <span class="album-preview__number-unit">фотографий</span>
                            </section>
                        </a>
                    </article>
                    <article class="album-preview album-preview_gallery gallery__item" style="background-image: url('/img/slider-1.jpg')">
                        <a href="" class="album-preview__info container-flex container-flex_col">
                            <span class="album-preview__button">+</span>
                            <h4 class="album-preview__heading">Небольшое название фотоальбома в две строки</h4>
                            <section class="album-preview__number">
                                <span class="album-preview__number-value">15</span>
                                <span class="album-preview__number-unit">фотографий</span>
                            </section>
                        </a>
                    </article>
                </section>
            </article>
            <article>
                <h3 class="heading section-heading">Понедельник, 25 декабря</h3>
                <section class="container-flex container-flex_sb gallery">
                    <article class="album-preview album-preview_gallery gallery__item" style="background-image: url('/img/slider-1.jpg')">
                        <a href="" class="album-preview__info container-flex container-flex_col">
                            <span class="album-preview__button">+</span>
                            <h4 class="album-preview__heading">Небольшое название фотоальбома в две строки</h4>
                            <section class="album-preview__number">
                                <span class="album-preview__number-value">15</span>
                                <span class="album-preview__number-unit">фотографий</span>
                            </section>
                        </a>
                    </article>
                    <article class="album-preview album-preview_gallery gallery__item" style="background-image: url('/img/slider-1.jpg')">
                        <a href="" class="album-preview__info container-flex container-flex_col">
                            <span class="album-preview__button">+</span>
                            <h4 class="album-preview__heading">Небольшое название фотоальбома в две строки</h4>
                            <section class="album-preview__number">
                                <span class="album-preview__number-value">15</span>
                                <span class="album-preview__number-unit">фотографий</span>
                            </section>
                        </a>
                    </article>
                    <article class="album-preview album-preview_gallery gallery__item" style="background-image: url('/img/slider-1.jpg')">
                        <a href="" class="album-preview__info container-flex container-flex_col">
                            <span class="album-preview__button">+</span>
                            <h4 class="album-preview__heading">Небольшое название фотоальбома в две строки</h4>
                            <section class="album-preview__number">
                                <span class="album-preview__number-value">15</span>
                                <span class="album-preview__number-unit">фотографий</span>
                            </section>
                        </a>
                    </article>
                    <article class="album-preview album-preview_gallery gallery__item" style="background-image: url('/img/slider-1.jpg')">
                        <a href="" class="album-preview__info container-flex container-flex_col">
                            <span class="album-preview__button">+</span>
                            <h4 class="album-preview__heading">Небольшое название фотоальбома в две строки</h4>
                            <section class="album-preview__number">
                                <span class="album-preview__number-value">15</span>
                                <span class="album-preview__number-unit">фотографий</span>
                            </section>
                        </a>
                    </article>
                </section>
            </article>
            <button class="gallery__button button">Еще фотоальбомы</button>
        </div>
    </main>

    <?php
        require($blocks['footer']);
    ?>
</body>
</html>
