<aside class="aside">
    <?php
        $sn_modifier = 'social-networks_aside';

        if (!$aside_content)
        {
            require $blocks['tournament'];
            require $blocks['social-networks'];
        }
        else
        {
            foreach ($aside_content as $section) {
                require $blocks[$section];
            }
        }
    ?>
</aside>
