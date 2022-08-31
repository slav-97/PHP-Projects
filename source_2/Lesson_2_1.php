<?php
    /* Справочник PHP: https://php.net */
    /*
        Escape-последовательности для Unicode-символов:
        https://www.rapidtables.com/code/text/unicode-characters.html
    */
    echo 'Hello World'; // Выводим строку Hello World
    echo '<br />'; # Выводим тег <br />
    echo '<b>Привет, мир!</b>';
    echo "\u{2023}";
?>
<p>А это уже HTML-текст!</p>
<p>Можно встроить <?='PHP-код'?> прямо в текст</p>
<p>А можно встроить <?php echo 'PHP-код'; ?> и так!</p>