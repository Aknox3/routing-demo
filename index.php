<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

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

    $f3->route('GET /jewelry/rings/toe-rings', function() {
        //echo '<h1>This is the Toe Rings page</h1>';
        $template = new Template();
        echo $template->render('views/toe-rings.html');
    });

    $f3->route('GET /hello/@name',
        function($f3, $params) {
        $name = $params['name'];
        echo "<h1>Hello, $name</h1>";
        });

    $f3->run();

?>
