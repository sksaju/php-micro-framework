<?php 
/** User: SkSaju ...*/

$app = new Application();

$app->router->get('/', function() {
    return 'Hello World';
});

$app->router->get('/users', function() {
    return 'Users';
});

$app->run();