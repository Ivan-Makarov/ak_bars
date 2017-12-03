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
            <section class="lead-image container-flex">
                <img src="/img/slider-1.jpg" alt="" class="lead-image__img">
            </section>
            <h3 class="heading news-article__heading container-flex">
                <section class="news-article__date">
                    <span class="news-article__day">25</span>
                    <span class="news-article__month">12.2017</span>
                </section>
                <div>
                    Академия АкБарс начала подготовку  к&nbsp;&laquo;Турниру Академии хоккея АкБарс 2017&raquo;
                </div>
            </h3>
            <article class="article article_text">
                <p class="paragraph">
                    5&nbsp;октября во&nbsp;дворце спорта &laquo;Золотая шайба&raquo; прошла церемония передачи клюшек &laquo;Заряд&raquo; воспитанникам ДЮСШ &laquo;Динамо&raquo;.
                </p>
                <p class="paragraph">
                    Клюшки, изготовленные на&nbsp;заводе Даниса Зарипова в&nbsp;Набережных Челнах, были приобретены &laquo;Академией хоккея Ак&nbsp;Барс&raquo; для последующей передачи детско-юношеским хоккейным школам, входящим в&nbsp;структуру Академии.
                </p>
                <p class="paragraph">
                    ДЮСШ &laquo;Динамо&raquo; первым получила 300 клюшек для команд всех возрастов, в&nbsp;церемонии передачи приняли участие директор &laquo;Академии хоккея Ак&nbsp;Барс&raquo; Евгений Рычков, председатель комитета физической культуры и&nbsp;спорта исполкома&nbsp;г. Казани Светлана Вострикова, а&nbsp;также сам Данис Зарипов&nbsp;&mdash; четырёхкратный обладатель Кубка Гагарина.
                </p>
                <p class="paragraph">
                    Это первое такое событие в&nbsp;нашей спортивной школе, связанное с&nbsp;большими изменениями в&nbsp;структуре ДЮСШ, которые произошли в&nbsp;этом году благодаря &laquo;Академии хоккея Ак&nbsp;Барс&raquo;. Нам очень повезло, что именно школу &laquo;Динамо&raquo; взяли в&nbsp;систему Академии. Хоккей&nbsp;&mdash; достаточно дорогой вид спорта, поэтому помощники и&nbsp;спонсоры школе нужны всегда.
                </p>
                <p class="paragraph">
                    При этом Академия оказывает не&nbsp;только материальную помощь, но&nbsp;и&nbsp;методическую&nbsp;&mdash; проводятся обучающие семинары для тренеров и&nbsp;детей. С&nbsp;прошлого сезона тренеры начали процесс переобучения, что, конечно скажется на&nbsp;результатах детей. А&nbsp;ещё Академия привлекает к&nbsp;участию в&nbsp;жизни школ таких звёзд, как Данис Зарипов, что очень приятно. Дети, обучающиеся в&nbsp;ДЮСШ &laquo;Динамо&raquo; пол эгидой &laquo;Академии хоккея Ак&nbsp;Барс&raquo;&nbsp;&mdash; счастливые дети, им&nbsp;очень повезло.
                </p>
                <blockquote class="standout-text">
                    <p class="quote__paragraph">
                        Данис Зарипов:
                    </p>
                    <p class="standout-text__paragraph">
                        &mdash;&nbsp;Очень приятно, когда дети радуются. Это ощущение я&nbsp;бы сопоставил с&nbsp;победами в&nbsp;профессиональном спорте&nbsp;&mdash; когда видишь счастье на&nbsp;лицах детей, понимаешь, что проделал весь этот большой труд не&nbsp;просто так.
                    </p>
                </blockquote>
                <p class="paragraph">
                    &laquo;Эти дети&nbsp;&mdash; наше подрастающее поколение, замена нам. Я&nbsp;понимаю, что многим не&nbsp;хватает экипировки&nbsp;&mdash; я&nbsp;сам проходил через это в&nbsp;их&nbsp;возрасте. Приходилось просить клюшки у&nbsp;профессионалов, зарабатывать своей игрой, получать поощрения от&nbsp;тренера в&nbsp;виде формы или новой клюшки. Поэтому считаю, что &laquo;Академия хоккея Ак&nbsp;Барс&raquo; сделала правильную акцию, в&nbsp;которой я&nbsp;был рад принять участие&raquo;.
                </p>
            </article>
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
