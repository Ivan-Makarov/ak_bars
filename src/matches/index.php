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
