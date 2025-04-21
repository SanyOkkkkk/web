<?php
declare(strict_types=1);
namespace MyProject\Classes;

/*
 * User AbstractUser - абстрактный класс 
 */ 
abstract class AbstractUser
	{
      	/*
 * Функция вывода значение свойств класса
 * @param string $name, string $login, string $password
 * @return св-ва классов $this->name, $this->login, $this->password, $this->role
 */	 
		abstract public function showInfo();
		
	}