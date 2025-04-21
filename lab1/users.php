<?php

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', __DIR__) . str_replace('\\', '/', substr($class,9)) . '.php'; 
    // echo str_replace('\\', '/', __DIR__) . str_replace('\\', '/', substr($class,9)) . '.php';
   
    if (file_exists($file)) {
        require $file;
        
    }
});

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;


// Обычные пользователи
$user1 = new User('Алексей', 'alex2025', 'qwerty123');
$user2 = new User('Мария', 'masha89', '12345678');
$user3 = new User('Иван', 'ivan_ivanov', 'pass2025');


$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

// Суперпользователь
$superUser = new SuperUser('Администратор', 'admin', 'adminpass', 'administrator');
$superUser->showInfo();
$superUser->getInfo();

// Вывод статистики
echo "<br>";
echo "<strong>Всего обычных пользователей: " . User::$userCount . "</strong><br>";
echo "<strong>Всего супер-пользователей: " . SuperUser::$superUserCount . "</strong><br>";
