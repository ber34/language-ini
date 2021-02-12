<?php
require_once('class_lang.php');
/* Okresl ktory jezyk "1" to polski "2" to angielski */
/* Specify which language "1" is the Polish "2" is an English */
        $file="lang.ini";
        $pl=1;
        $en=2;
        $lang = new class_lang($en, $file);
    echo $lang->_lang("ZALOGUJ");
    echo "<br>";
    echo $lang->_lang("WYLOGUJ");
