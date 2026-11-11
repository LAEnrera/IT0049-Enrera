<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Alexander Hernandez',
                'username' => 'admin',
                'role' => 'Administrator',
            ],
            [
                'id' => 2,
                'name' => 'Hermogenes Santiago III',
                'username' => 'cashier1',
                'role' => 'Cashier',
            ],
            [
                'id' => 3,
                'name' => 'Matthew Arcellana',
                'username' => 'cashier2',
                'role' => 'Cashier',
            ],
            [
                'id' => 4,
                'name' => 'Luis Adrian Enrera',
                'username' => 'manager',
                'role' => 'Manager',
            ],
            [
                'id' => 5,
                'name' => 'Rhythm Mendoza',
                'username' => 'staff',
                'role' => 'Staff',
            ],
        ];

        return view('users', compact('users'));
    }
}