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
            Новости
        </h2>
    </div>
    <div class="content container-flex">
        <main class="main">

        </main>
        <?php
            $aside_content = array('tournament');
            require $blocks['aside'];
        ?>
    </div>
    <?php
        require($blocks['footer']);
    ?>
</body>
</html>
