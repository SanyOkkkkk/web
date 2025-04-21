<?php
declare(strict_types=1);
namespace MyProject\Classes;
/*
 * User Class, наследованный от абстрактного класса AbstractUser
 */ 

class User extends AbstractUser{ 
    /**
 * @param public $name - имя пользователя
 *        public $login - логин
 *        public $password - пароль
 *        public static $userCount - количество пользователей
 */
    public $name; 
    public $login; 
    public $password;
    public static $userCount = 0;
    
    /*
 * Функция вывода значение свойств класса
 * @param string $name, string $login, string $password
 * @return св-ва классов $this->name, $this->login, $this->password, $this->role
 */	 
    
    function showInfo(){
         echo "<p><b>name:</b> {$this->name} <b>login:</b> {$this->login} <b>password:</b> {$this->password}</p>";
        
     }

    /*
 * Функция конструктор
 * @param string $name, string $login, string $password
 * @return св-ва классов $this->name, $this->login, $this->password, $this->role, self::$userCount
 */	 
    function __construct($name, $login, $password){  //Конструктор
      $this->name = $name;
      $this->login = $login;
      $this->password = $password;
      self::$userCount++;
    }

    /*
 * Функция деструктор
 * @param string $name, string $login, string $password
 * @return вывод логина при удалении информации об элементах класса
 */	  
    function __destruct(){  // Деструктор
      echo "<p>Пользователь <b>{$this->login}</b> удален </p>";
    }
}