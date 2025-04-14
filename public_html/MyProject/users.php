<?php
declare(strict_types=1);

spl_autoload_register(function ($class) {
    $path = str_replace('MyProject\\Classes\\', '', $class);
    $path = 'Classes/' . $path . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

// Обычные пользователи
$user1 = new User('Алексей', 'alex2025', 'qwerty123');
$user2 = new User('Мария', 'masha89', '12345678');
$user3 = new User('Иван', 'ivan_ivanov', 'pass2025');

// Суперпользователь
$superUser = new SuperUser('Администратор', 'admin', 'adminpass', 'administrator');

// Вывод информации
$user1->showInfo();
$user2->showInfo();
$user3->showInfo();
$superUser->showInfo();

// Вывод статистики
echo "<strong>Всего обычных пользователей: " . User::$userCount . "</strong><br>";
echo "<strong>Всего супер-пользователей: " . SuperUser::$superUserCount . "</strong><br>";
