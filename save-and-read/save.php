<?php

ini_set('display_errors', 1);

if (!file_exists('data')) {
    mkdir('data', 0777, true);
    file_put_contents('data/data.txt', '');
}

chmod('data/data.txt', 0777);

$name = $_GET['name'];

file_put_contents('./data/data.txt', $name . "\r\n", FILE_APPEND);

?>

<html>
    <head>
        <title>Webserver in PHP</title>
    </head>
    <body>
        <h1>Hallo <?php echo $name; ?></h1>
    </body>
</html>