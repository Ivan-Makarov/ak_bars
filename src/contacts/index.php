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
        <h2 class="heading section-heading">
            Контакты
        </h2>
    </div>

    <div class="content container-flex">
        <main class="main">
            <?php
                require $blocks['breadcrumbs']
            ?>

            <section class="contacts__section">
                <p>
                    <b>Адрес:</b> 420107, Республика Татарстан, г.&nbsp;Казань, ул.&nbsp;Петербургская, д.&nbsp;37
                </p>
                <p>
                    <b>Телефон:</b> <a class="link" href="tel:+78432218181">+7 843 221-81-81</a>
                </p>
                <p>
                    <b>Электронная почта:</b> <a class="link" href="mailto:info@akbars.academy">info@akbars.academy</a>
                </p>
            </section>

            <section class="contacts__section">
                <p>
                    <b>Реквизиты:</b><br>
                        ООО "Академия хоккея Ак&nbsp;Барс" имени Ю.&nbsp;И.&nbsp;Моисеева <br>
                        ИНН 1655379198 <br>
                        ОГРН 1171690003055 
                </p>
            </section>

            <section class="contacts__section">
                <b>Юридический адрес:</b> 420045, Республика Татарстан, г.&nbsp;Казань, ул.&nbsp;Карла Маркса, д.&nbsp;71
            </section>

            <form action="" class="form contacts__form">
                <p>Вы можете написать нам, заполнив и отправив форму ниже</p>
                <input type="text" class="form__input contacts__form-input" placeholder="ФИО">
                <input type="text" class="form__input contacts__form-input" placeholder="Телефон/E-mail для связи">
                <textarea name="" class="form__textarea form__input" placeholder="Текст сообщения"></textarea>
                <button class="button">Отправить сообщение</button>
            </form>

            <section class="map" id="map"></section>

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
