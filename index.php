<?php
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>System</title>
    </head>
    <body>
        <?php
        require './vendor/autoload.php';
        use Core\ConfigController as Home;
        $url = new Home();
        $url->load();
        ?>
    </body>
</html>