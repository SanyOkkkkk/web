<?php
spl_autoload_register();

use Factory\Models\User;

$obj = User::parse('users');
echo $obj->render();
