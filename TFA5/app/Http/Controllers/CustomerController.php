<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'name' => 'Luis Adrian Enrera',
                'email' => 'laenrera@fit.edu.ph',
                'phone' => '09171234567',
            ],
            [
                'id' => 2,
                'name' => 'Hermogenes Santiago III',
                'email' => 'hsantiago@fit.edu.ph',
                'phone' => '09181234567',
            ],
            [
                'id' => 3,
                'name' => 'Matthew Arcellana',
                'email' => 'mtarcellana@fit.edu.ph',
                'phone' => '09191234567',
            ],
            [
                'id' => 4,
                'name' => 'Alexander Hernandez',
                'email' => 'ahernandez@feutech.edu.ph',
                'phone' => '09201234567',
            ],
            [
                'id' => 5,
                'name' => 'Rhythm Mendoza',
                'email' => 'rmendoza@fit.edu.ph',
                'phone' => '09211234567',
            ],
        ];

        return view('customers', compact('customers'));
    }
}