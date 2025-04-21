<?php
declare(strict_types=1);

namespace MyProject\Classes;

require_once 'User.php';
require_once 'SuperUserInterface.php';

/**
 * Класс SuperUser расширяет User и реализует интерфейс SuperUserInterface.
 */
class SuperUser extends User implements SuperUserInterface
{
    public string $role;

    /**
     * @var int Количество созданных экземпляров класса SuperUser.
     */
    public static int $superUserCount = 0;

    public function __construct(string $name, string $login, string $password, string $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;

        self::$superUserCount++;  // Считаем созданные супер-пользователи
    }

    public function showInfo(): void
    {
        parent::showInfo();
        echo "Роль пользователя: {$this->role}<br>";
        echo "<hr>";
    }

    public function getInfo(): array
    {
        return [
            'name'  => $this->name,
            'login' => $this->login,
            'role'  => $this->role
        ];
    }
}
