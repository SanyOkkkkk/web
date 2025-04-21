<?php
declare(strict_types=1);
namespace MyProject\Classes;

/*
 * SuperUserInterface Interface
 */
interface SuperUserInterface {
        /*
    * Функция вывода ассоциативного массива, 
    * где в котором именами элементов массива являются имена свойств объекта,
    * а значениями элементов - значения свойств объекта
    * @param string $name, string $login, string $password
    * @return св-ва классов $this->name, $this->login, $this->password, $this->role
    */	
    public function getInfo();
}