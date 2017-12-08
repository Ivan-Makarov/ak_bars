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
            <section class="video-gallery container-flex container-flex_sb">
                <article class="video-item">
                    <section class="video-container inactive">
                        <video src="" class="video" poster="/img/slider-1.jpg"></video>
                        <button class="video-play"></button>
                    </section>
                    <h3 class="video-item__heading">Небольшое название видео в две строчки</h3>
                </article>
                <article class="video-item">
                    <section class="video-container inactive">
                        <video src="" class="video" poster="/img/slider-1.jpg"></video>
                        <button class="video-play"></button>
                    </section>
                    <h3 class="video-item__heading">Небольшое название видео в две строчки</h3>
                </article>
                <article class="video-item">
                    <section class="video-container inactive">
                        <video src="" class="video" poster="/img/slider-1.jpg"></video>
                        <button class="video-play"></button>
                    </section>
                    <h3 class="video-item__heading">Небольшое название видео в две строчки</h3>
                </article>
                <article class="video-item">
                    <section class="video-container inactive">
                        <video src="" class="video" poster="/img/slider-1.jpg"></video>
                        <button class="video-play"></button>
                    </section>
                    <h3 class="video-item__heading">Небольшое название видео в две строчки</h3>
                </article>
                <article class="video-item">
                    <section class="video-container inactive">
                        <video src="" class="video" poster="/img/slider-1.jpg"></video>
                        <button class="video-play"></button>
                    </section>
                    <h3 class="video-item__heading">Небольшое название видео в две строчки</h3>
                </article>
                <article class="video-item">
                    <section class="video-container inactive">
                        <video src="" class="video" poster="/img/slider-1.jpg"></video>
                        <button class="video-play"></button>
                    </section>
                    <h3 class="video-item__heading">Небольшое название видео в две строчки</h3>
                </article>
            </section>
            <button class="video-gallery__button button">Еще видео</button>
        </div>
    </main>

    <?php
        require($blocks['footer']);
    ?>
</body>
</html>
