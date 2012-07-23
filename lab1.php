<?php
    // segunda parte del ejercicio
    $name = $_REQUEST["name"];
    $nickname = $_REQUEST["nickname"];
    $name = utf8_decode($name);
    $nickname = utf8_decode($nickname);
    $txt = "<p>Contenido desde servidor</p>";
    $txt .= "Name : " . $name . "<br />";
    $txt .= "Nickname : " . $nickname . "<br />";
    $txt = utf8_encode($txt);
    echo $txt;
?>