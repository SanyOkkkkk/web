<?php
spl_autoload_register();

use MVC\Controllers\Controller;

$obj = new Controller('users.rss');
echo $obj->render();
echo "<br>";

$obj = new Controller('users/1.html');
echo $obj->render();
echo "<br>";

$obj = new Controller('users.md'); 
echo $obj->render();

