<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Luis Enrera',
                'email' => 'luis.enrera@techmail.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Joseph Calleja',
                'email' => 'joseph.calleja@techmail.com',
                'phone' => '09181234567',
            ],
            [
                'full_name' => 'Carla Reyes',
                'email' => 'carla.reyes@techmail.com',
                'phone' => '09191234567',
            ],
            [
                'full_name' => 'Daniel Cegielski',
                'email' => 'daniel.cegielski@techmail.com',
                'phone' => '09201234567',
            ],
            [
                'full_name' => 'Ella Mendoza',
                'email' => 'ella.mendoza@techmail.com',
                'phone' => '09211234567',
            ],
        ];

        return view('customers', ['customers' => $customers]);
    }
}