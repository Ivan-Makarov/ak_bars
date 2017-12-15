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
                Видеогалерея
            </h2>
            <?php
                require $blocks['breadcrumbs'];
            ?>
            <article>
                <h3 class="heading section-heading">
                    Вторник, 26 декабря
                </h3>
                <section class="gallery video-gallery container-flex container-flex_sb">
                    <article class="video-item gallery__item">
                        <section class="video-container inactive">
                            <video src="" class="video" poster="/img/slider-1.jpg"></video>
                            <button class="video-play"></button>
                        </section>
                        <h4 class="video-item__heading">Небольшое название видео в две строчки</h4>
                    </article>
                    <article class="video-item gallery__item">
                        <section class="video-container inactive">
                            <video src="" class="video" poster="/img/slider-1.jpg"></video>
                            <button class="video-play"></button>
                        </section>
                        <h4 class="video-item__heading">Небольшое название видео в две строчки</h4>
                    </article>
                    <article class="video-item gallery__item">
                        <section class="video-container inactive">
                            <video src="" class="video" poster="/img/slider-1.jpg"></video>
                            <button class="video-play"></button>
                        </section>
                        <h4 class="video-item__heading">Небольшое название видео в две строчки</h4>
                    </article>
                    <article class="video-item gallery__item">
                        <section class="video-container inactive">
                            <video src="" class="video" poster="/img/slider-1.jpg"></video>
                            <button class="video-play"></button>
                        </section>
                        <h4 class="video-item__heading">Небольшое название видео в две строчки</h4>
                    </article>
                    <article class="video-item gallery__item">
                        <section class="video-container inactive">
                            <video src="" class="video" poster="/img/slider-1.jpg"></video>
                            <button class="video-play"></button>
                        </section>
                        <h4 class="video-item__heading">Небольшое название видео в две строчки</h4>
                    </article>
                    <article class="video-item gallery__item">
                        <section class="video-container inactive">
                            <video src="" class="video" poster="/img/slider-1.jpg"></video>
                            <button class="video-play"></button>
                        </section>
                        <h4 class="video-item__heading">Небольшое название видео в две строчки</h4>
                    </article>
                </section>
            </article>
            <article>
                <h3 class="heading section-heading">
                    Подельник, 25 декабря
                </h3>
                <section class="gallery video-gallery container-flex container-flex_sb">
                    <article class="video-item gallery__item">
                        <section class="video-container inactive">
                            <video src="" class="video" poster="/img/slider-1.jpg"></video>
                            <button class="video-play"></button>
                        </section>
                        <h4 class="video-item__heading">Небольшое название видео в две строчки</h4>
                    </article>
                    <article class="video-item gallery__item">
                        <section class="video-container inactive">
                            <video src="" class="video" poster="/img/slider-1.jpg"></video>
                            <button class="video-play"></button>
                        </section>
                        <h4 class="video-item__heading">Небольшое название видео в две строчки</h4>
                    </article>
                    <article class="video-item gallery__item">
                        <section class="video-container inactive">
                            <video src="" class="video" poster="/img/slider-1.jpg"></video>
                            <button class="video-play"></button>
                        </section>
                        <h4 class="video-item__heading">Небольшое название видео в две строчки</h4>
                    </article>
                    <article class="video-item gallery__item">
                        <section class="video-container inactive">
                            <video src="" class="video" poster="/img/slider-1.jpg"></video>
                            <button class="video-play"></button>
                        </section>
                        <h4 class="video-item__heading">Небольшое название видео в две строчки</h4>
                    </article>
                    <article class="video-item gallery__item">
                        <section class="video-container inactive">
                            <video src="" class="video" poster="/img/slider-1.jpg"></video>
                            <button class="video-play"></button>
                        </section>
                        <h4 class="video-item__heading">Небольшое название видео в две строчки</h4>
                    </article>
                    <article class="video-item gallery__item">
                        <section class="video-container inactive">
                            <video src="" class="video" poster="/img/slider-1.jpg"></video>
                            <button class="video-play"></button>
                        </section>
                        <h4 class="video-item__heading">Небольшое название видео в две строчки</h4>
                    </article>
                </section>
            </article>
            <button class="gallery__button button">Еще видео</button>
        </div>
    </main>

    <?php
        require($blocks['footer']);
    ?>
</body>
</html>
