<?php
    require_once "vendor/autoload.php";

    $f3 = Base::instance();

    $f3->set('DEBUG',3);

    $f3->route('GET /', function() {
        echo '<h1>ROUTING DEMO</h1>';
    });

    $f3->route('GET /page1', function() {
    echo '<h1>THIS IS PAGE ONE!!1!!11!</h1>';
    });

    $f3->route('GET /page2', function() {
    echo '<h1>THIS IS PAGE TWO</h1>';
    });

    $f3->route('GET /page1/subpage-a', function() {
        echo '<h1>THIS IS PAGE ONE SUB A!!</h1>';
    });

    $f3->run();
?>
