<!DOCTYPE html>
<html lang="ru">

<?php
    require($_SERVER['DOCUMENT_ROOT'].'/blocks/head.php');
?>

<body class="body">
    <?php
        require($_SERVER['DOCUMENT_ROOT'].'/blocks/header/header.php');
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
            require($_SERVER['DOCUMENT_ROOT'].'/blocks/aside/aside.php');
        ?>
    </div>
    <?php
        require($_SERVER['DOCUMENT_ROOT'].'/blocks/footer/footer.php');
    ?>
</body>
</html>
