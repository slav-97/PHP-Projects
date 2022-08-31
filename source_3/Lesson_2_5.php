<?php
    define('COLOR', '#a0a');
    echo COLOR;
    echo '<br />';
    echo defined('COLOR');
    
    /* Встроенные константы в PHP */
    
    echo '<br />';
    echo __FILE__;
    echo '<br />';
    echo PHP_VERSION;
    echo '<br />';
    echo DIRECTORY_SEPARATOR;
    
    define('FONT_SIZE', '24px');
?>
<p style="color: <?=COLOR?>; font-size: <?=FONT_SIZE?>;">Привет, мир!</p>