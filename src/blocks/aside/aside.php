<aside class="aside">
    <?php
        $sn_modifier = 'aside__social-networks';

        if (!$aside_content) {
            require($blocks['tournament']);
            require($blocks['social-networks']);
        } else {
            if (in_array('tournament', $aside_content))
                require($blocks['tournament']);
            if (in_array('social-networks', $aside_content))
                require($blocks['social-networks']);
        }
    ?>
</aside>
