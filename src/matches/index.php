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
    <div class="content container-flex">
        <main class="main">
            <article class="matchday article">
                <h3 class="heading main__heading matchday__heading">
                    Среда, 27 декабря
                </h3>
                <ul class="matchday__matches container-flex container-flex_grid">
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card matchday__match match-card">

                        </article>
                    </li>
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card matchday__match match-card">

                        </article>
                    </li>
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card matchday__match match-card">

                        </article>
                    </li>
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card matchday__match match-card">

                        </article>
                    </li>
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card matchday__match match-card">

                        </article>
                    </li>
                </ul>
            </article>
            <article class="matchday article">
                <h3 class="heading main__heading matchday__heading">
                    Вторник, 26 декабря
                </h3>
                <ul class="matchday__matches container-flex container-flex_grid">
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card matchday__match match-card">

                        </article>
                    </li>
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card matchday__match match-card">

                        </article>
                    </li>
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card matchday__match match-card">

                        </article>
                    </li>
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card matchday__match match-card">

                        </article>
                    </li>
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card matchday__match match-card">

                        </article>
                    </li>
                </ul>
            </article>
            <article class="matchday article">
                <h3 class="heading main__heading matchday__heading">
                    Понедельник, 25 декабря
                </h3>
                <ul class="matchday__matches container-flex container-flex_grid">
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card info-card_finished matchday__match match-card">

                        </article>
                    </li>
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card info-card_finished matchday__match match-card">

                        </article>
                    </li>
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card info-card_finished matchday__match match-card">

                        </article>
                    </li>
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card info-card_finished matchday__match match-card">

                        </article>
                    </li>
                    <li class="container-flex__grid-item matchday__match-container">
                        <article class="info-card info-card_finished matchday__match match-card">

                        </article>
                    </li>
                </ul>
            </article>
        </main>
        <?php
            require $blocks['aside'];
        ?>
    </div>
    <?php
        require($blocks['footer']);
    ?>
</body>
</html>
