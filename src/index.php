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
    </main>
    <?php
        require $blocks['footer'];
    ?>
</body>
</html>
