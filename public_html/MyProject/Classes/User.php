<?php
declare(strict_types=1);

namespace MyProject\Classes;

require_once 'AbstractUser.php';

/**
 * Класс User — обычный пользователь.
 */
class User extends AbstractUser
{
    public string $name;
    public string $login;
    private string $password;

    /**
     * @var int Количество созданных экземпляров класса User.
     */
    public static int $userCount = 0;

    public function __construct(string $name, string $login, string $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;

        self::$userCount++;  // Считаем созданные объекты
    }

    public function showInfo(): void
    {
        echo "Имя пользователя: {$this->name}<br>";
        echo "Логин: {$this->login}<br>";
        echo "Пароль: {$this->password}<br>";
        echo "<hr>";
    }

    public function __destruct()
    {
        echo "Пользователь {$this->login} удален.<br>";
    }
}
