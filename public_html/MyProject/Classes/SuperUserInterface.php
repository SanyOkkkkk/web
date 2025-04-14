<?php
declare(strict_types=1);

namespace MyProject\Classes;

/**
 * Интерфейс SuperUserInterface определяет метод для получения информации.
 */
interface SuperUserInterface
{
    /**
     * Метод для получения данных пользователя в виде массива.
     *
     * @return array
     */
    public function getInfo(): array;
}
