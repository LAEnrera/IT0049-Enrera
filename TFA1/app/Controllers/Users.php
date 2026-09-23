<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Liam Enrera',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Lawrence Enrera',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Jaylord Angeles',
                'role' => 'Cashier',
            ],
            [
                'username' => 'inventory01',
                'full_name' => 'Mark Santos',
                'role' => 'Inventory Staff',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Paolo Contis',
                'role' => 'Store Manager',
            ],
        ];

        return view('users', ['users' => $users]);
    }
}