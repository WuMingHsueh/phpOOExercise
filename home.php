<?php

include __DIR__ ."./vendor/autoload.php";

use OOExercise\pagesWork\Pages;

$homePage = new Pages();

$homePage->content = <<<_CONTENT
<section>
    <h2>Welcome to the home of TLA Consulting.</h2>
    <p>Please take some time to get to know us.</p>
    <p>We specialize in serving your business needs and hope to hear from you soon.</p>
</section>    
_CONTENT;

$homePage->Display();
?>

