<?php
declare(strict_types=1);
namespace MyProject\Classes;

/**
 * SuperUser, наследованный от класса User с интерфейсом SuperUserInterface
 */
class SuperUser extends User implements SuperUserInterface{
    /**
* @param public $role - роль пользователя
*/
   public $role;
   public static $superUserCount = 0;
   
   // перегрузка конструкторa
   /*
* Функция конструктор
* @param string $name, string $login, string $password, string $role
* @return вывод св-в $this->name, $this->login, $this->password, $this->role
*/	
   function __construct($name, $login, $password, $role) {
      $this->name = $name;
      $this->login = $login;
      $this->password = $password;
      $this->role = $role;
      self::$superUserCount++;
   }
   
/*
* Функция вывода значения свойств класса
* @param string $name, string $login, string $password
* @return св-ва классов $this->name, $this->login, $this->password, $this->role
*/	       
   function showInfo(){
        echo "<p><b>name:</b> {$this->name} <b>login:</b> {$this->login} <b>password:</b> {$this->password} <b>role:</b> {$this->role} </p>";
   }  
   /*
* Функция вывода ассоциативного массива, 
* где в котором именами элементов массива являются имена свойств объекта,
* а значениями элементов - значения свойств объекта
* @param string $name, string $login, string $password
* @return св-ва классов $this->name, $this->login, $this->password, $this->role
*/	
   function getInfo()
   {
       return print_r(['name' => $this->name,
               'login' => $this->login,
               'password' => $this->password,
               'role' => $this->role ]);

   }
}