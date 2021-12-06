<?php
$array = ["Jonatan", "Pedro", "Evaldo", "Rafael"];
var_dump($array);
$serialize = serialize($array);
echo "<br>";
var_dump($serialize);
echo "<br>";
$desserializada = unserialize($serialize);
var_dump($desserializada);
?>
