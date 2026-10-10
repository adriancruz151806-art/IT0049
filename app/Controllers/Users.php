<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username' => 'ajohnson',
                'full_name' => 'Alice Johnson',
                'role' => 'Cashier',
            ],
            [
                'username' => 'mreyes',
                'full_name' => 'Mark Reyes',
                'role' => 'Inventory Manager',
            ],
            [
                'username' => 'rdelacruz',
                'full_name' => 'Rosa Dela Cruz',
                'role' => 'Sales Associate',
            ],
            [
                'username' => 'dlim',
                'full_name' => 'Daniel Lim',
                'role' => 'Supervisor',
            ],
            [
                'username' => 'ssantos',
                'full_name' => 'Sofia Santos',
                'role' => 'Store Admin',
            ],
        ];

        return view('users/index', ['users' => $users]);
    }
}
