<?php
    require 'vendor/autoload.php';

    $slugifier = new \Slug\Slugifier;
    
    function slugify($string) {
    global $slugifier;
    return $string . ' => ' . $slugifier->slugify($string) . PHP_EOL;
    }
    
    echo slugify('Hello world!');
    echo "
    ";
    echo slugify('Un titre en bon français !');
?>