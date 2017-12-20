<?php

include __DIR__ . "./vendor/autoload.php";

use OOExercise\pagesWork\ServicePages;

$service = new ServicePages;
$service->content = <<<_CONTENT
<p>
    Consequat aliqua do id minim ex qui laborum laboris quis. Anim nostrud non aliqua nostrud ea duis. Commodo tempor cillum magna magna nostrud voluptate ullamco reprehenderit ea voluptate velit officia nisi laborum. Excepteur non dolore fugiat labore ex nostrud minim officia veniam cupidatat in. Magna deserunt pariatur in ut sit eiusmod non nisi nulla. Aute pariatur magna in enim qui labore dolor mollit aute occaecat.
</p>
_CONTENT;
$service->Display();
