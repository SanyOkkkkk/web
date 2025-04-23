<?php
namespace Factory\Models;

class Users extends Collection
{
    public function __construct(public ?array $users = null)
    {
        $users ??= [
            new User(
                 'dmitry.koterov@gmail.com',
                 'password',
                 'Дмитрий',
                 'Котеров'),
            new User(
                 'igorsimdyanov@gmail.com',
                 'password',
                 'Игорь',
                 'Симдянов'),
            new User(
                'polinasokol@gmail.com',
                'password',
                'Полина',
                'Соколова'),
            new User(
                'boss123@gmail.com',
                'password',
                'Никита',
                'Басихин'),
            new User(
                'nutzuevo@gmail.com',
                'password',
                'Антон',
                'Шишкин')
        ];
        parent::__construct($users);
    }
}
