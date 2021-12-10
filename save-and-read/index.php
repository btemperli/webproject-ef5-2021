<?php

ini_set('display_errors', 1);

if (file_exists('data/data.txt')) {
    $name = file_get_contents('data/data.txt');
} else {
    $name = $_GET['name'];
}

?>

<html>
    <head>
        <title>Webserver in PHP</title>
    </head>
    <body>
        <h1>Test <?php echo $name; ?></h1>
    </body>
</html>