<?php
declare(strict_types=1);

namespace MyProject\Classes;

/**
 * Абстрактный класс AbstractUser задаёт основу для всех пользователей.
 */
abstract class AbstractUser
{
    /**
     * Абстрактный метод для вывода информации о пользователе.
     *
     * @return void
     */
    abstract public function showInfo(): void;
}
