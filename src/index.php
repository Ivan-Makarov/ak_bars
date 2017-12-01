<!DOCTYPE html>
<html lang="ru">

<?php
    require($_SERVER['DOCUMENT_ROOT'].'/blocks/head.html');
?>

<body class="body">
    <?php
        require($_SERVER['DOCUMENT_ROOT'].'/blocks/header/header.php');
    ?>
    <main class="main">
        <div class="all-width">
            <div class="content container-flex">
                <section class="top-stats"></section>
                <?php
                    $modifier = 'tournament_index';
                    require($_SERVER['DOCUMENT_ROOT'].'/blocks/tournament/tournament.php');
                ?>
            </div>
        </div>
    </main>
    <?php
        require($_SERVER['DOCUMENT_ROOT'].'/blocks/footer/footer.php');
    ?>
</body>
</html>
