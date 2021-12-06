<?php

require "vendor/autoload.php";

$slugifier = new \Slug\Slugifier;

function slugify($string) {
    global $slugifier;
    return $string . ' => ' . $slugifier->slugify($string) . PHP_EOL;
}

echo slugify('Hello world!');
echo slugify('Un titre en bon français !');


function slugifyBR($brazilianString) {
    global $slugifier;
    $slugifier->setTransliterate(true);
    return $brazilianString . ' => ' . $slugifier->slugify($brazilianString) . PHP_EOL;
}

echo slugifyBR('Teste com acentuação');

?>
